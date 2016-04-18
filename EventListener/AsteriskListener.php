<?php

namespace Core\AsteriskBundle\EventListener;

use Core\AsteriskBundle\Event\AsteriskEvent;

/* * 
 * 
 * @author Jacek Łoziński
 */



class AsteriskListener {

    protected $container;

    public function __construct($container) {

        $this->container = $container;
    }
    /**
     * Zdarzenie rozpoczynające komunikację z Asterisk Manager-em
     * 
     * @param \Core\AsteriskBundle\Event\AsteriskEvent $event
     */
    public function onFullyBooted(AsteriskEvent $event) {
          //echo "onFullyBooted".PHP_EOL;
    }
    
    /**
     * Zdarzenie wykorzystywane przy pobieraniu danych z komendy SipPeers
     * Każdy peer zwracany jest za pomocą wystąpienia zdarzenia PeerEntry
     * 
     * @param \Core\AsteriskBundle\Event\AsteriskEvent $event
     */
    public function onPeerEntry(AsteriskEvent $event) {
        //echo "onPeerEntry".PHP_EOL; 
    }
    
    /**
     * Zdarzenie zamykające przesyłanie listy Peer-ów.
     * Poprzedają je zdarzebia PeerEntry.
     * 
     * @param \Core\AsteriskBundle\Event\AsteriskEvent $event
     */
    public function onPeerListComplete(AsteriskEvent $event) {
        
        //echo "onPeerListComplete".PHP_EOL;
    }

}
