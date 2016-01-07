<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Pbxqueue
 *
 * @ORM\Table(name="pbx_queue")
 * @ORM\Entity
 */
class Queue
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
     * @ORM\Column(name="name", type="string", length=128, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="musiconhold", type="string", length=128, nullable=true)
     */
    private $musiconhold;

    /**
     * @var string
     *
     * @ORM\Column(name="announce", type="string", length=128, nullable=true)
     */
    private $announce;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=128, nullable=true)
     */
    private $context;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeout", type="integer", nullable=true)
     */
    private $timeout;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_callswaiting", type="string", length=128, nullable=true)
     */
    private $queueCallsWaiting;

    /*
     * @var \CCO\CallCenterBundle\Entity\CallCenter
     *
     * @ORM\ManyToOne(targetEntity="CCO\CallCenterBundle\Entity\CallCenter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="callcenter_id", referencedColumnName="id")
     * })
     */
    /**
     * @var integer
     *
     * @ORM\Column(name="callcenter_id", type="integer", nullable=true)
     */
    private $callCenter;
    
    
     /**
     * @var integer
     *
     * @ORM\Column(name="campaign_id", type="integer", nullable=true)
     */
    private $campaign;



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
     * Set name
     *
     * @param string $name
     * @return Pbxqueue
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set musiconhold
     *
     * @param string $musiconhold
     * @return Pbxqueue
     */
    public function setMusiconhold($musiconhold)
    {
        $this->musiconhold = $musiconhold;

        return $this;
    }

    /**
     * Get musiconhold
     *
     * @return string 
     */
    public function getMusiconhold()
    {
        return $this->musiconhold;
    }

    /**
     * Set announce
     *
     * @param string $announce
     * @return Pbxqueue
     */
    public function setAnnounce($announce)
    {
        $this->announce = $announce;

        return $this;
    }

    /**
     * Get announce
     *
     * @return string 
     */
    public function getAnnounce()
    {
        return $this->announce;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return Pbxqueue
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set timeout
     *
     * @param integer $timeout
     * @return Pbxqueue
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Get timeout
     *
     * @return integer 
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set queueCallswaiting
     *
     * @param string $queueCallswaiting
     * @return Pbxqueue
     */
    public function setQueueCallswaiting($queueCallswaiting)
    {
        $this->queueCallswaiting = $queueCallswaiting;

        return $this;
    }

    /**
     * Get queueCallswaiting
     *
     * @return string 
     */
    public function getQueueCallswaiting()
    {
        return $this->queueCallswaiting;
    }

    /**
     * Set callCenter
     *
     * @param \Core\AsteriskBundle\Entity\CallCenter $callCenter
     * @return Pbxqueue
     */
    public function setCallcenter($callCenter = null)
    {
        $this->callCenter = $callCenter;

        return $this;
    }

    /**
     * Get callCenter
     *
     * @return \Core\AsteriskBundle\Entity\CallCenter 
     */
    public function getCallcenter()
    {
        return $this->callCenter;
    }

    /**
     * toString method
     */
    public function __toString()
    {
       return (string)$this->getName();
    }





}
