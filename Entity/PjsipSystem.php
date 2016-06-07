<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pbxsip
 *
 * @ORM\Table(name="pbx_pjsip_systems")
 * @ORM\Entity
 */
class PjsipSystem
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="timer_t1", type="integer", nullable=true)
     */
    private $timerT1;

    /**
     * @var integer
     *
     * @ORM\Column(name="timer_b", type="integer", nullable=true)
     */
    private $timerB;

    /**
     * @var string
     *
     * @ORM\Column(name="compact_headers", type="string",length=10, nullable=true)
     */
    private $compactHeaders;

    /**
     * @var integer
     *
     * @ORM\Column(name="threadpool_initial_size", type="integer",  nullable=true)
     */
    private $threadpoolInitialSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="threadpool_auto_increment", type="integer", nullable=true)
     */
    private $threadpoolAutoIncrement;

    /**
     * @var integer
     *
     * @ORM\Column(name="threadpool_idle_timeout", type="integer", nullable=true)
     */
    private $threadpoolIdleTimeout;

    /**
     * @var integer
     *
     * @ORM\Column(name="threadpool_max_size", type="integer", nullable=true)
     */
    private $threadpoolMaxSize;

    /**
     * @var string
     *
     * @ORM\Column(name="disable_tcp_switch", type="string", length=10, nullable=true)
     */
    private $disableTcpSwitch;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set timerT1
     *
     * @param integer $timerT1
     *
     * @return PjsipSystem
     */
    public function setTimerT1($timerT1)
    {
        $this->timerT1 = $timerT1;
    
        return $this;
    }

    /**
     * Get timerT1
     *
     * @return integer
     */
    public function getTimerT1()
    {
        return $this->timerT1;
    }

    /**
     * Set timerB
     *
     * @param integer $timerB
     *
     * @return PjsipSystem
     */
    public function setTimerB($timerB)
    {
        $this->timerB = $timerB;
    
        return $this;
    }

    /**
     * Get timerB
     *
     * @return integer
     */
    public function getTimerB()
    {
        return $this->timerB;
    }

    /**
     * Set compactHeaders
     *
     * @param string $compactHeaders
     *
     * @return PjsipSystem
     */
    public function setCompactHeaders($compactHeaders)
    {
        $this->compactHeaders = $compactHeaders;
    
        return $this;
    }

    /**
     * Get compactHeaders
     *
     * @return string
     */
    public function getCompactHeaders()
    {
        return $this->compactHeaders;
    }

    /**
     * Set threadpoolInitialSize
     *
     * @param integer $threadpoolInitialSize
     *
     * @return PjsipSystem
     */
    public function setThreadpoolInitialSize($threadpoolInitialSize)
    {
        $this->threadpoolInitialSize = $threadpoolInitialSize;
    
        return $this;
    }

    /**
     * Get threadpoolInitialSize
     *
     * @return integer
     */
    public function getThreadpoolInitialSize()
    {
        return $this->threadpoolInitialSize;
    }

    /**
     * Set threadpoolAutoIncrement
     *
     * @param integer $threadpoolAutoIncrement
     *
     * @return PjsipSystem
     */
    public function setThreadpoolAutoIncrement($threadpoolAutoIncrement)
    {
        $this->threadpoolAutoIncrement = $threadpoolAutoIncrement;
    
        return $this;
    }

    /**
     * Get threadpoolAutoIncrement
     *
     * @return integer
     */
    public function getThreadpoolAutoIncrement()
    {
        return $this->threadpoolAutoIncrement;
    }

    /**
     * Set threadpoolIdleTimeout
     *
     * @param integer $threadpoolIdleTimeout
     *
     * @return PjsipSystem
     */
    public function setThreadpoolIdleTimeout($threadpoolIdleTimeout)
    {
        $this->threadpoolIdleTimeout = $threadpoolIdleTimeout;
    
        return $this;
    }

    /**
     * Get threadpoolIdleTimeout
     *
     * @return integer
     */
    public function getThreadpoolIdleTimeout()
    {
        return $this->threadpoolIdleTimeout;
    }

    /**
     * Set threadpoolMaxSize
     *
     * @param integer $threadpoolMaxSize
     *
     * @return PjsipSystem
     */
    public function setThreadpoolMaxSize($threadpoolMaxSize)
    {
        $this->threadpoolMaxSize = $threadpoolMaxSize;
    
        return $this;
    }

    /**
     * Get threadpoolMaxSize
     *
     * @return integer
     */
    public function getThreadpoolMaxSize()
    {
        return $this->threadpoolMaxSize;
    }

    /**
     * Set disableTcpSwitch
     *
     * @param string $disableTcpSwitch
     *
     * @return PjsipSystem
     */
    public function setDisableTcpSwitch($disableTcpSwitch)
    {
        $this->disableTcpSwitch = $disableTcpSwitch;
    
        return $this;
    }

    /**
     * Get disableTcpSwitch
     *
     * @return string
     */
    public function getDisableTcpSwitch()
    {
        return $this->disableTcpSwitch;
    }
}
