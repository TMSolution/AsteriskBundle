<?php

/**
 * Copyright (c) 2014, TMSolution
 * All rights reserved.
 * 
 */

namespace Core\AsteriskBundle\Service;

/**
 * Serwis odpowiedzialny za komunikację z centralą Asterisk.
 * 
 * @author Jacek Łoziński
 */
class AgentService
{

    protected $container = null;
    protected $statusIcons = [
        0 => ['zmdi zmdi-phone-setting', 'c-blue', 'system.pbx.monitoring.agent.status.title.dialing', 'system.pbx.monitoring.agent.status.detail.dialing','bgm-blue'],
        1 => ['zmdi zmdi-phone-in-talk', 'c-green', 'system.pbx.monitoring.agent.status.title.talking','system.pbx.monitoring.agent.status.detail.talking','bgm-blue'],
        2 => ['zmdi zmdi-phone-end', 'c-red', 'system.pbx.monitoring.agent.status.title.not_talking','system.pbx.monitoring.agent.status.detail.not_talking','bgm-lightgray'],
        3 => ['zmdi zmdi-coffee', 'c-brown', 'system.pbx.monitoring.agent.status.title.on_break', 'system.pbx.monitoring.agent.status.detail.on_break','bgm-lightgray']
    ];

    /**
     * 
     * @param type $container
     */
    public function __construct($container)
    {

        $this->container = $container;
    }

    public function getMonitorAgentStatus($extension)
    {
        $status=$this->statusIcons[rand(0, 3)];
        
        $response = [
        'monitoringIcon' => $status[0],
        'monitoringIconColor' => $status[1],
        'monitoringTitle' => $status[2],
        'monitoringDetail' => $status[3],
        'monitoringListenButtonColor' => $status[4]        
        ];
        
        return $response;
    }

}
