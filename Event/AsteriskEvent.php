<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core\AsteriskBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class AsteriskEvent extends Event {

    
    protected $parameters;

    public function __construct(Array $parameters) {
        $this->parameters=$parameters;
    }

       
    public function getParameters()
    {
        return $this->parameters;
    }

}
