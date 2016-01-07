<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pbxmeetme
 *
 * @ORM\Table(name="pbx_meetme")
 * @ORM\Entity
 */
class Meetme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="confno", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conferenceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starttime", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endtime", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="pin", type="string", length=10, nullable=true)
     */
    private $pin;

    /**
     * @var string
     *
     * @ORM\Column(name="opts", type="string", length=100, nullable=true)
     */
    private $options;

    /**
     * @var string
     *
     * @ORM\Column(name="adminpin", type="string", length=20, nullable=true)
     */
    private $adminPin;

    /**
     * @var string
     *
     * @ORM\Column(name="adminopts", type="string", length=100, nullable=true)
     */
    private $adminOptions;

    /**
     * @var string
     *
     * @ORM\Column(name="members", type="string",length=500, nullable=true)
     */
    private $members;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxusers", type="integer", nullable=true)
     */
    private $maxUsers;

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
    
    /*
     * @var CCO\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CCO\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id", nullable=true)
     * })
     */
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $user;



   

    /**
     * Get confno
     *
     * @return integer 
     */
    public function getConfno()
    {
        return $this->confno;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Pbxmeetme
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param \DateTime $endtime
     * @return Pbxmeetme
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set pin
     *
     * @param string $pin
     * @return Pbxmeetme
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return string 
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set opts
     *
     * @param string $opts
     * @return Pbxmeetme
     */
    public function setOpts($opts)
    {
        $this->opts = $opts;

        return $this;
    }

    /**
     * Get opts
     *
     * @return string 
     */
    public function getOpts()
    {
        return $this->opts;
    }

    /**
     * Set adminpin
     *
     * @param string $adminpin
     * @return Pbxmeetme
     */
    public function setAdminpin($adminpin)
    {
        $this->adminpin = $adminpin;

        return $this;
    }

    /**
     * Get adminpin
     *
     * @return string 
     */
    public function getAdminpin()
    {
        return $this->adminpin;
    }

    /**
     * Set adminopts
     *
     * @param string $adminopts
     * @return Pbxmeetme
     */
    public function setAdminopts($adminopts)
    {
        $this->adminopts = $adminopts;

        return $this;
    }

    /**
     * Get adminopts
     *
     * @return string 
     */
    public function getAdminopts()
    {
        return $this->adminopts;
    }

    /**
     * Set members
     *
     * @param integer $members
     * @return Pbxmeetme
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get members
     *
     * @return integer 
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set maxusers
     *
     * @param integer $maxusers
     * @return Pbxmeetme
     */
    public function setMaxusers($maxusers)
    {
        $this->maxusers = $maxusers;

        return $this;
    }

    /**
     * Get maxusers
     *
     * @return integer 
     */
    public function getMaxusers()
    {
        return $this->maxusers;
    }

    /**
     * Set callCenter
     *
     * @param \Core\AsteriskBundle\Entity\CallCenter $callCenter
     * @return Pbxmeetme
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
        $this->getConfno();
    }





}
