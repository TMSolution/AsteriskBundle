<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QueueMember
 *
 * @ORM\Table(name="pbx_queue_log")
 * @ORM\Entity
 */
class QueueLog
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=32, nullable=true)
     */
    private $time;


    /**
     * @var string
     *
     * @ORM\Column(name="callid", type="string", length=40, nullable=true)
     */
    private $callid;

    
    /**
     * @var string
     *
     * @ORM\Column(name="queuename", type="string", length=40, nullable=true)
     */
    private $queueName;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent",  type="string", length=32, nullable=true)
     */
    private $agent;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="event",  type="string", length=40, nullable=true)
     */
    private $event;
    
    /**
     * @var string
     *
     * @ORM\Column(name="data",  type="string", length=100, nullable=true)
     */
    private $data;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="data1",  type="string", length=100, nullable=true)
     */
    private $data1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="data2",  type="string", length=100, nullable=true)
     */
    private $data2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="data3",  type="string", length=100, nullable=true)
     */
    private $data3;
    
    /**
     * @var string
     *
     * @ORM\Column(name="data4",  type="string", length=100, nullable=true)
     */
    private $data4;
    
    /**
     * @var string
     *
     * @ORM\Column(name="data5",  type="string", length=100, nullable=true)
     */
    private $data5;
    
    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=100, nullable=true)
     */
    private $created;

    
    

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
     * Set ruleName
     *
     * @param string $ruleName
     *
     * @return QueueRule
     */
    public function setRuleName($ruleName)
    {
        $this->ruleName = $ruleName;
    
        return $this;
    }

    /**
     * Get ruleName
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->ruleName;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return QueueRule
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set minPenalty
     *
     * @param string $minPenalty
     *
     * @return QueueRule
     */
    public function setMinPenalty($minPenalty)
    {
        $this->minPenalty = $minPenalty;
    
        return $this;
    }

    /**
     * Get minPenalty
     *
     * @return string
     */
    public function getMinPenalty()
    {
        return $this->minPenalty;
    }

    /**
     * Set maxPenalty
     *
     * @param string $maxPenalty
     *
     * @return QueueRule
     */
    public function setMaxPenalty($maxPenalty)
    {
        $this->maxPenalty = $maxPenalty;
    
        return $this;
    }

    /**
     * Get maxPenalty
     *
     * @return string
     */
    public function getMaxPenalty()
    {
        return $this->maxPenalty;
    }
}
