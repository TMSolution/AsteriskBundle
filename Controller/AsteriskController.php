<?php

namespace Core\AsteriskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Core\AsteriskBundle\Event\AsteriskEvent;

class AsteriskController extends Controller {

    protected $asterisk = null;
    protected $asteriskConnection = null;

    public function sipPeersAction() {

        $this->asteriskService = $this->get('TMSolution.AsteriskBundle.AsteriskService');

        $this->asteriskConnection = $this->asteriskService->connect('192.168.2.55', 'nexuscc', 'gerthruda');

        //$event = new AsteriskEvent($this);
       $this->asteriskService->addListener('peerentry', function($event,$eventName) {
           //var_dump($event);
           echo '<pre>';
           \Doctrine\Common\Util\Debug::dump($var);
           echo '</pre>';
        });

        $sipPeers = $this->asteriskService->cmdSipPeers();
        



        return new Response('ok');
    }

    public function connectPingAction() {

        $this->asteriskService = $this->get('TMSolution.AsteriskBundle.AsteriskService');
        $this->asteriskConnection = $this->asteriskService->connect('192.168.2.55', 'nexuscc', 'gerthruda');

        $ping = $this->asteriskService->cmdPing();

        var_dump($ping);


        return new Response('ok');
    }

}

/**
 * tu zbieramy listę zdarzeń do obsługi
 * 
 * fullybooted
 * peerentry
 * peerlistcomplete
 */
