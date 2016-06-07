<?php

/**
 * Copyright (c) 2014, TMSolution
 * All rights reserved.
 * 
 */

namespace Core\AsteriskBundle\Service;

use Core\AsteriskBundle\EventListener\AsteriskListener;
use Core\AsteriskBundle\Event\AsteriskEvent;

/**
 * Serwis odpowiedzialny za komunikację z centralą Asterisk.
 * 
 * @author Jacek Łoziński
 */
class AsteriskService {

    protected $container = null;
    protected $connection;
    protected $pbxServer;
    protected $pbxPort;
    protected $pbxUsername;
    protected $pbxPassword;
    protected $timeout = false;
    protected $dispatcher;

    /**
     * 
     * @param type $container
     */
    public function __construct($container) {

        $this->container = $container;
        $this->dispatcher = $this->container->get('event_dispatcher');
    }

    /**
     * Wymusza wylogowanie z asterisk managera i rozłączenie 
     * UWAGA, nie myliś z rozłączeniem agenta
     */
    public function __destruct() {

        if ($this->connection === true) {
            $this->disconnect();
        }
    }

    /**
     * Połączenie z centralą 
     * 
     * @param string $pbxServer
     * @param string $pbxUsername
     * @param string $pbxPassword
     * @param integer $pbxPort
     * @return handler
     * @throws \Exception
     */
    public function connect($pbxServer, $pbxUsername, $pbxPassword, $pbxPort = '5038') {

        $this->pbxServer = $pbxServer;
        $this->pbxUsername = $pbxUsername;
        $this->pbxPassword = $pbxPassword;
        $this->pbxPort = $pbxPort;


        $errorNumber = $errorMessage = NULL;

        $this->connection = @fsockopen($this->pbxServer, $this->pbxPort, $errorNumber, $errorMessage);

        if ($this->connection === false) {
            throw new \Exception("Brak połaczenia! {$this->pbxServer}:{$this->pbxPort} ($errorNumber) $errorMessage");
        }

        /* odczyt nagłówka połaczenia */
        $header = fgets($this->connection);
        if ($header === false) {
            throw new \Exception("Asterisk Manager nie odowiada.");
        }

        /* logowanie */
        $response = $this->request('login', array('Username' => $this->pbxUsername, 'Secret' => $this->pbxPassword));
        if ($response['Response'] != 'Success') {
            $this->disconnect();
            throw new \Exception("Błąd logowania.");
        }



        /**
         * Rejestracja zdarzenia fullybooted
         * 
         * Przykład zakładania zdarzeń
         * 1. Poprzez plik listener
         * 2. Poprzez funkcję
         */
        $listener = new AsteriskListener($this->container);
        //
        //$this->addListener('peerentry', array($listener, 'onPeerEntry'));
        //$this->addListener('fullybooted', array($listener, 'onFullyBooted'));
        //$this->addListener('peerlistcomplete', array($listener, 'onPeerListComplete'));
        //$this->removeListener('fullybooted',array($listener, 'onFullyBooted'));


        $function = function($event) {
           // echo "Zdarzenie fullybooted" . PHP_EOL;
        };
        //$this->addListener('fullybooted', $function);

        $function2 = function($event) {
           // echo "Zdarzenie peerentry" . PHP_EOL;
        };
        //$this->addListener('peerentry', $function2);
        //$this->removeListener('fullybooted',$function);


        return $this->connection;
    }

    /**
     * Ustawia parametr konfiguracji komendy
     * @param array $array
     * @param string $key
     * @param string $value
     */
    protected function setParameter(&$array, $key, $value) {
        if (!empty($value)) {
            $array[$key] = $value;
        }
    }

    /**
     * Rozłączenie z centralą 
     */
    public function disconnect() {
        $this->logoff();
        fclose($this->connection);
    }

    /**
     * Wylogowanie z managera centrali
     *
     */
    protected function logoff() {
        return $this->request('Logoff');
    }

    /**
     * Wyślij do centrali
     *
     * @param string $action
     * @param array $params
     * @return array
     */
    protected function request($action, $params = array()) {
        $request = "Action: $action\r\n";
        foreach ($params as $param => $value) {
            $request .= "$param: $value\r\n";
        }
        $request .= "\r\n";
        fwrite($this->connection, $request);
        return $this->waitResponse();
    }

    /**
     * Oczekiwanie na zdarzenie
     * 
     * @param type $allowTimeout
     * @return type
     */
    protected function waitResponse($allowTimeout = false) {
        $this->timeout = false;
        do {
            $type = NULL;
            $params = array();

            $buffer = trim(fgets($this->connection, 4096));
            while ($buffer != '') {
                $a = strpos($buffer, ':');
                if ($a) {
                    if (!count($params)) {
                        $type = strtolower(substr($buffer, 0, $a));
                        if (substr($buffer, $a + 2) == 'Follows') {

                            $params['data'] = '';
                            $bufferInternal = fgets($this->connection, 4096);

                            while (substr($bufferInternal, 0, 6) != '--END ') {
                                $params['data'] .= $bufferInternal;
                                $bufferInternal = fgets($this->connection, 4096);
                            }
                        }
                    }
                    $params[substr($buffer, 0, $a)] = substr($buffer, $a + 2);
                }
                $buffer = trim(fgets($this->connection, 4096));
            }

           /* echo '<br/>'.'TYP:'.$type.'<br/>'.PHP_EOL;
            echo '<pre>';
            \Doctrine\Common\Util\Debug::dump($params);
            echo '</pre>';*/
            $this->routeEvent($type, $params, $allowTimeout);
        } while ($type != 'response' && !$this->timeout);
        return $params;
    }

    /**
     * Routing zdarzeń
     * 
     * @param type $eventType
     * @param type $params
     * @param type $allowTimeout
     * @throws \Exception
     */
    protected function routeEvent($eventType, $params, $allowTimeout) {
        switch ($eventType) {
            case '': // @todo timeout
                $this->timeout = $allowTimeout;
                break;
            case 'event':
                $this->processListener($params);
                break;
            case 'response':
                break;
            default:
                throw new \Exception('Nieznany pakiet z Asterisk Managera: ' . print_r($params, true));
        }
    }

    /**
     * Obsługa zdarzenia
     * 
     * @param type $params
     * @return type
     * @throws \Exception
     */
    protected function processListener($params) {
        $response = false;
        $eventName = strtolower($params['Event']);

        //echo "zidentyfikowano " . $eventName . '<br/>' .PHP_EOL;


        if ($this->dispatcher->hasListeners($eventName)) {
            $event = new AsteriskEvent($params);
            $response = $this->dispatcher->dispatch($eventName, $event);
        } else {
            //echo "Brak obsługi zdarzenia: $eventName.\n";
        }

        return $response;
    }

    /**
     * Dodaje zdarzenie 
     * 
     * @param string $event
     * @param handler $handler
     * @return boolean
     * @throws \Exception
     */
    public function addListener($eventName, $handler) {
        $eventName = strtolower($eventName);
         /*if ($this->dispatcher->hasListeners($eventName)) {
          throw new \Exception("Zdarzenie $eventName jest juz zdefiniowane.");
          }*/ 
        $this->dispatcher->addListener($eventName, $handler);
        return true;
    }

    /**
     * Usuwa zdarzenie 
     * 
     * @param string $eventName
     * @return boolean
     * @throws \Exception
     */
    public function removeListener($eventName, $handler) {
        $eventName = strtolower($eventName);
        if (!$this->dispatcher->hasListeners($eventName)) {
            throw new \Exception("Zdarzenie $eventName nie było zdefiniowane.");
        }
        $this->dispatcher->removeListener($eventName, $handler);
        return true;
    }

    /*
     * Komendy centrali 
     * 
     * 
     * 
     * 
     * 
     */

    /**
     * Ustawianie automatycznego rozłaczenia kanału 
     * po upłynięciu podanego czasu (w sekundach). 
     *
     * @param string $channel Nazwa kanału, który będzie rozłączony
     * @param integer $timeout Makssymalny czas połaczenia (w sek.)
     */
    public function cmdAbsoluteTimeout($channel, $timeout) {
        return $this->request('AbsoluteTimeout', array('Channel' => $channel, 'Timeout' => $timeout));
    }

    /**
     * Ustawienie nazwy pliku nagrania dla zadanego kanału.
     *
     * @param string $channel Nagrywany kanał.
     * @param string $file Nowa nazwa pliku.
     */
    public function cmdChangeMonitorFileName($channel, $file) {
        return $this->request('ChangeMontior', array('Channel' => $channel, 'File' => $file));
    }

    /**
     * Wykonanie dowolnej komendy CLI centrali
     *
     * @param string $command
     */
    public function cmdCommand($command) {
        $parameters = array('Command' => $command);

        return $this->request('Command', $parameters);
    }

    /**
     * Włączenie/wyłaczenie zdarzeń wysyłanych z centrali.
     *
     * @param string $eventmask  'on' = wszystkie, 'off' = żadne lub 'system,call,log,verbose,command,agent,user,reporting' = lista zdarzeń
     */
    public function cmdEvents($eventmask) {
        return $this->request('Events', array('EventMask' => $eventmask));
    }

    /**
     * Sprawdź status stacji
     *
     * @param string $exten Extension to check state on
     * @param string $context Context for extension
     * @param string $actionid
     */
    public function cmdExtensionState($exten, $context, $actionid = NULL) {
        $parameters = array('Exten' => $exten, 'Context' => $context);
        $this->setParameter($parameters, 'ActionID', $actionid);

        return $this->request('ExtensionState', $parameters);
    }

    /**
     * Rozłącz kanał
     *
     * @param string $channel Kanał do rozłączenia
     */
    public function cmdHangup($channel) {
        return $this->request('Hangup', array('Channel' => $channel));
    }

    /**
     * Lista peerów IAX
     *
     */
    public function cmdIAXPeers() {
        return $this->request('IAXPeers');
    }

    /**
     * Lista peerów SIP
     *
     */
    public function cmdSIPPeers() {
        return $this->request('SIPpeers');
    }

    //SIPshowregistry

    /**
     * Lista komend centrali
     *
     * @param string $actionid
     */
    public function cmdListCommands($actionid = NULL) {

        if (!empty($actionid)) {
            return $this->request('ListCommands', array('ActionID' => $actionid));
        }

        return $this->request('ListCommands');
    }

    /**
     * Sprawdź zajętość skrzynki mailowej
     *
     * Zwraca ilości nowych i starych wiadomości.
     *   Message: tytuł
     *   Mailbox: identyfikator skrzynki
     *   NewMessages: ilość nowych wiadomości
     *   OldMessages: ilość odsłuchanych wiadomości
     * 
     * @param string $mailbox IDentyfikator skrzynki <mailbox>@<vm-context>
     * @param string $actionid
     */
    public function cmdMailboxCount($mailbox, $actionid = NULL) {
        $parameters = array('Mailbox' => $mailbox);
        $this->setParameter($parameters, 'ActionID', $actionid);
        return $this->request('MailboxCount', $parameters);
    }

    /**
     * Sprawdź skrzynkę
     *
     * Returns number of messages.
     *   Message: status
     *   Mailbox: <mailboxid>
     *   Waiting: <count>
     *
     * @param string $mailbox IDentyfikator skrzynki <mailbox>@<vm-context>
     * @param string $actionid
     */
    public function cmdMailboxStatus($mailbox, $actionid = NULL) {
        $parameters = array('Mailbox' => $mailbox);
        $this->setParameter($parameters, 'ActionID', $actionid);
        return $this->request('MailboxStatus', $parameters);
    }

    /**
     * Dzwonienie (Originate Call)
     *
     * @param string $channel Kanał
     * @param string $exten Stacja (wymaga 'context' i 'priority')
     * @param string $context Kontekst (wymaga 'Exten' i 'Priority')
     * @param string $priority Priorytet (wymaga 'Exten' i 'Context')
     * @param string $application Aplikacja
     * @param string $data Dane (wymaga 'Application')
     * @param integer $timeout Jak długo system ma czekać na odebranie żądania (w milisek.)
     * @param string $callerid NUmer kanału wychodzącego
     * @param string $variable Ustawienie zmiennych kanału (VAR1=value1|VAR2=value2)
     * @param string $account Kod bilingowy
     * @param boolean $async true - asynchroniczność
     * @param string $actionid 
     */
    public function cmdOriginate($channel, $exten = NULL, $context = NULL, $priority = NULL, $application = NULL, $data = NULL, $timeout = NULL, $callerid = NULL, $variable = NULL, $account = NULL, $async = NULL, $actionid = NULL) {
        $parameters = array('Channel' => $channel);

        $this->setParameter($parameters, 'Exten', $exten);
        $this->setParameter($parameters, 'Context', $context);
        $this->setParameter($parameters, 'Priority', $priority);
        $this->setParameter($parameters, 'Application', $application);
        $this->setParameter($parameters, 'Data', $data);
        $this->setParameter($parameters, 'Timeout', $timeout);
        $this->setParameter($parameters, 'CallerID', $callerid);
        $this->setParameter($parameters, 'Variable', $variable);
        $this->setParameter($parameters, 'Account', $account);
        $this->setParameter($parameters, 'Exten', $exten);
        $this->setParameter($parameters, 'ActionID', $actionid);

        if (!is_null($async)) {
            $parameters['Async'] = ($async) ? 'true' : 'false';
        }

        return $this->request('Originate', $parameters);
    }

    /**
     * Lista zaparkowanych połączeń
     *
     * @param string $actionid
     */
    public function parkedCalls($actionid = NULL) {
        $parameters = array();
        $this->setParameter($parameters, 'ActionID', $actionid);

        return $this->request('ParkedCalls', $parameters);
    }

    /**
     * Ping
     *
     */
    public function cmdPing() {
        return $this->request('Ping');
    }

    /**
     * Dodawanie użytkownika do kolejki
     *
     * @param string $queue Istniejąca kolejka
     * @param string $interface Użytkownik (np: SIP/1000)
     * @param integer $penalty Służy do określania kolejnośći w kolejce (im wyższe tym dalej)
     */
    public function cmdQueueAdd($queue, $interface, $penalty = 0, $memberName = null) {
        $parameters = array('Queue' => $queue, 'Interface' => $interface);
        $this->setParameter($parameters, 'Penalty', $penalty);
        $this->setParameter($parameters, 'MemberName', $memberName);


        return $this->request('QueueAdd', $parameters);
    }

    /**
     * Usuwanie użytkownika z kolejki
     *
     * @param string $queue Istniejąca kolejka
     * @param string $interface Użytkownik (np: SIP/1000)
     */
    public function cmdQueueRemove($queue, $interface) {
        return $this->request('QueueRemove', array('Queue' => $queue, 'Interface' => $interface));
    }

    /**
     * Kolejki
     *
     */
    public function cmdQueues() {
        return $this->request('Queues');
    }

    /**
     * Status kolejki
     *
     * @param string $actionid
     */
    public function cmdQueueStatus($actionid = NULL) {

        $parameters = array();
        $this->setParameter($parameters, 'ActionID', $actionid);
        return $this->request('QueueStatus', $parameters);
    }

    /**
     * Przekierowanie
     *
     * @param string $channel Kanał
     * @param string $extrachannel Opcjonalnie druga strona połączenia czyli przekierowyjący
     * @param string $exten Stacja
     * @param string $context Kontekst
     * @param string $priority Priorytet
     */
    public function cmdRedirect($channel, $extrachannel, $exten, $context, $priority) {

        $parameters = array();
        $this->setParameter($parameters, 'Channel', $channel);
        $this->setParameter($parameters, 'ExtraChannel', $extrachannel);
        $this->setParameter($parameters, 'Exten', $exten);
        $this->setParameter($parameters, 'Context', $context);
        $this->setParameter($parameters, 'Priority', $priority);

        return $this->request('Redirect', $parameters);
    }

    /**
     * Ustaw CDR USERFIELD 
     *
     * @todo sprawdzić czy działa
     * @param string $userfield
     * @param string $channel
     * @param string $append
     */
    public function cmdSetCDRUserField($userfield, $channel, $append = NULL) {
        $parameters = array('UserField' => $userfield, 'Channel' => $channel);
        $this->setParameter($parameters, 'Append', $append);
        return $this->request('SetCDRUserField', $parameters);
    }

    /**
     * Pobierz zmienną kanału
     *
     * @param string $channel Kanał dla którego pobieramy zmienne
     * @param string $variable Nazwa zmiennej
     * @param string $actionid 
     */
    public function cmdGetVar($channel, $variable, $actionid = NULL) {
        $parameters = array('Channel' => $channel, 'Variable' => $variable);
        $this->setParameter($parameters, 'ActionID', $actionid);
        return $this->request('GetVar', $parameters);
    }

    /**
     * Pobierz zmienne kanału
     *
     * @param string $channel Kanał dla którego pobieramy zmienne
     * @param string $variables Array nazw
     * @param string $actionid 
     * @return array
     */
    public function cmdGetVars($channel, $variables, $actionid = NULL) {

        $requestArray = Array();


        foreach ($variables as $variable) {
            $requestArray[] = $this->getVar($channel, $variable, $actionid);
        }

        return $requestArray;
    }

    /**
     * Ustawia zmienną dla kanału
     *
     * @param string $channel Kanał
     * @param string $variable Nazwa zmiennej
     * @param string $value Wartość
     */
    public function cmdSetVar($channel, $variable, $value) {
        $parameters = array('Channel' => $channel, 'Variable' => $variable, 'Value' => $value);
        return $this->request('SetVar', $parameters);
    }

    /**
     * Ustawia zmienne dla kanału
     *
     * @param string $channel Kanał
     * @param string $variables Tablica zmiennych i wartości ( array('var1'=>'val1',....) )
     * @return array
     */
    public function cmdSetVars($channel, $variables = array()) {
        $requestArray = Array();
        foreach ($variables as $variable => $value) {
            $requestArray[] = $this->setVar($channel, $variable, $value);
        }
        return $requestArray;
    }

    /**
     * Status kanału
     *
     * @param string $channel Kanał
     * @param string $actionid
     */
    public function cmdStatus($channel, $actionid = NULL) {
        $parameters = array('Channel' => $channel);
        $this->setParameter($parameters, 'ActionID', $actionid);

        return $this->request('Status', $parameters);
    }

    /**
     * Monitoring kanału do pliku
     *
     * @param string $channel
     * @param string $file
     * @param string $format
     * @param boolean $mix
     */
    public function cmdMonitor($channel, $file = NULL, $format = NULL, $mix = NULL) {
        $parameters = array('Channel' => $channel);

        $this->setParameter($parameters, 'File', $file);
        $this->setParameter($parameters, 'Format', $format);

        if (!is_null($file)) {
            $parameters['Mix'] = ($mix) ? 'true' : 'false';
        }
        return $this->request('Monitor', $parameters);
    }

    /**
     * Zatrzymanie monitorowania kanału
     *
     * @param string $channel Kanał
     */
    public function cmdStopMonitor($channel) {
        return $this->request('StopMonitor', array('Channel' => $channel));
    }

}
