<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QueueMember
 *
 * @ORM\Table(name="pbx_pbxqueuemember")
 * @ORM\Entity
 */
class QueueMember
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uniqueid", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unique;

    /**
     * @var string
     *
     * @ORM\Column(name="membername", type="string", length=45, nullable=true)
     */
    private $memberName;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_name", type="string", length=128, nullable=true)
     */
    private $queueName;

    /**
     * @var string
     *
     * @ORM\Column(name="interface", type="string", length=128, nullable=true)
     */
    private $interface;

    /**
     * @var integer
     *
     * @ORM\Column(name="paused", type="integer", nullable=true)
     */
    private $paused;

    /**
     * @var CCO\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CCO\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;

    /**
     * @var \Pbxqueue
     *
     * @ORM\ManyToOne(targetEntity="Queue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pbxqueue", referencedColumnName="id")
     * })
     */
    private $pbxqueue;



   

    /**
     * Get unique
     *
     * @return integer 
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * Set membername
     *
     * @param string $membername
     * @return Pbxqueuemember
     */
    public function setMembername($membername)
    {
        $this->membername = $membername;

        return $this;
    }

    /**
     * Get membername
     *
     * @return string 
     */
    public function getMembername()
    {
        return $this->membername;
    }

    /**
     * Set queueName
     *
     * @param string $queueName
     * @return Pbxqueuemember
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;

        return $this;
    }

    /**
     * Get queueName
     *
     * @return string 
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * Set interface
     *
     * @param string $interface
     * @return Pbxqueuemember
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface
     *
     * @return string 
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set paused
     *
     * @param integer $paused
     * @return Pbxqueuemember
     */
    public function setPaused($paused)
    {
        $this->paused = $paused;

        return $this;
    }

    /**
     * Get paused
     *
     * @return integer 
     */
    public function getPaused()
    {
        return $this->paused;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return Pbxqueuemember
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pbxqueue
     *
     * @param \Core\AsteriskBundle\Entity\Pbxqueue $pbxqueue
     * @return Pbxqueuemember
     */
    public function setPbxqueue(\Core\AsteriskBundle\Entity\Pbxqueue $pbxqueue = null)
    {
        $this->pbxqueue = $pbxqueue;

        return $this;
    }

    /**
     * Get pbxqueue
     *
     * @return \Core\AsteriskBundle\Entity\Pbxqueue 
     */
    public function getPbxqueue()
    {
        return $this->pbxqueue;
    }

    /**
     * toString method
     */
    public function __toString()
    {
        $this->getUnique();
    }





}
