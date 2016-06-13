<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//use CCO\CallCenterBundle\Entity\Campaign;
//use CCO\CallCenterBundle\Entity\CallCenter;
//use CCO\CallCenterBundle\Entity\Contact;
//use CCO\UserBundle\Entity\User;

/**
 * Pbxcdr
 *
 * @ORM\Table(name="pbx_cdr")
 * @ORM\Entity
 */
class Cdr
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
     * @var \DateTime
     *
     * @ORM\Column(name="calldate", type="datetime", nullable=false)
     */
    private $callDate;

    /**
     * @var string
     *
     * @ORM\Column(name="clid", type="string", length=80, nullable=false)
     */
    private $cl;

    /**
     * @var string
     *
     * @ORM\Column(name="src", type="string", length=80, nullable=true)
     */
    private $src;

    /**
     * @var string
     *
     * @ORM\Column(name="dst", type="string", length=80, nullable=true)
     */
    private $dst;

    /**
     * @var string
     *
     * @ORM\Column(name="dcontext", type="string", length=80, nullable=true)
     */
    private $dContext;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=80, nullable=true)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="dstchannel", type="string", length=80, nullable=true)
     */
    private $dstChannel;

    /**
     * @var string
     *
     * @ORM\Column(name="lastapp", type="string", length=80, nullable=true)
     */
    private $lastApp;

    /**
     * @var string
     *
     * @ORM\Column(name="lastdata", type="string", length=80, nullable=true)
     */
    private $lastData;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="billsec", type="integer", nullable=true)
     */
    private $billsec;

    /**
     * @var string
     *
     * @ORM\Column(name="disposition", type="string", length=45, nullable=true)
     */
    private $disposition;

    /**
     * @var integer
     *
     * @ORM\Column(name="amaflags", type="integer", nullable=true)
     */
    private $amaFlags;

    /**
     * @var string
     *
     * @ORM\Column(name="accountcode", type="string", length=45, nullable=true)
     */
    private $accountCode;

    /**
     * @var string
     *
     * @ORM\Column(name="userfield", type="string", length=255, nullable=true)
     */
    private $userfield;

    /**
     * @var string
     *
     * @ORM\Column(name="uniqueid", type="string", length=45, nullable=true)
     */
    private $unique;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedid", type="string", length=45, nullable=true)
     */
    private $linked;

    /**
     * @var string
     *
     * @ORM\Column(name="sequence", type="string", length=45, nullable=true)
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="peeraccount", type="string", length=45, nullable=true)
     */
    private $peeraccount;



    /*
     * @var \CCO\CallCenterBundle\Entity\Campaign
     *
     * @ORM\ManyToOne(targetEntity="CCO\CallCenterBundle\Entity\Campaign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     * })
     */

    /**
     * @var integer
     *
     * @ORM\Column(name="campaign_id", type="integer", nullable=true)
     */
    private $campaign;

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
     * @var \CCO\CallCenterBundle\Entity\Contact
     *
     * @ORM\ManyToOne(targetEntity="CCO\CallCenterBundle\Entity\Contact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     * })
     */

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=true)
     */
    private $contact;

    /**
     * @var integer
     *
     * @ORM\Column(name="contactdata_id", type="integer", nullable=true)
     */
    private $contactdata;

    /*
     * @var CCO\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CCO\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $user;


    /*
     * @ORM\ManyToMany(targetEntity="Core\AsteriskBundle\Entity\PbxExternalRecordFile", mappedBy="pbxcdr")
     */
    protected $cdrFiles;

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
     * Set calldate
     *
     * @param \DateTime $calldate
     * @return Pbxcdr
     */
    public function setCalldate($calldate)
    {
        $this->calldate = $calldate;

        return $this;
    }

    /**
     * Get calldate
     *
     * @return \DateTime 
     */
    public function getCalldate()
    {
        return $this->calldate;
    }

    /**
     * Set cl
     *
     * @param string $cl
     * @return Pbxcdr
     */
    public function setCl($cl)
    {
        $this->cl = $cl;

        return $this;
    }

    /**
     * Get cl
     *
     * @return string 
     */
    public function getCl()
    {
        return $this->cl;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return Pbxcdr
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
     * Set src
     *
     * @param string $src
     * @return Pbxcdr
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string 
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set dst
     *
     * @param string $dst
     * @return Pbxcdr
     */
    public function setDst($dst)
    {
        $this->dst = $dst;

        return $this;
    }

    /**
     * Get dst
     *
     * @return string 
     */
    public function getDst()
    {
        return $this->dst;
    }

    /**
     * Set dcontext
     *
     * @param string $dcontext
     * @return Pbxcdr
     */
    public function setDcontext($dcontext)
    {
        $this->dcontext = $dcontext;

        return $this;
    }

    /**
     * Get dcontext
     *
     * @return string 
     */
    public function getDcontext()
    {
        return $this->dcontext;
    }

    /**
     * Set channel
     *
     * @param string $channel
     * @return Pbxcdr
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string 
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set dstchannel
     *
     * @param string $dstchannel
     * @return Pbxcdr
     */
    public function setDstchannel($dstchannel)
    {
        $this->dstchannel = $dstchannel;

        return $this;
    }

    /**
     * Get dstchannel
     *
     * @return string 
     */
    public function getDstchannel()
    {
        return $this->dstchannel;
    }

    /**
     * Set lastapp
     *
     * @param string $lastapp
     * @return Pbxcdr
     */
    public function setLastapp($lastapp)
    {
        $this->lastapp = $lastapp;

        return $this;
    }

    /**
     * Get lastapp
     *
     * @return string 
     */
    public function getLastapp()
    {
        return $this->lastapp;
    }

    /**
     * Set lastdata
     *
     * @param string $lastdata
     * @return Pbxcdr
     */
    public function setLastdata($lastdata)
    {
        $this->lastdata = $lastdata;

        return $this;
    }

    /**
     * Get lastdata
     *
     * @return string 
     */
    public function getLastdata()
    {
        return $this->lastdata;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Pbxcdr
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set billsec
     *
     * @param integer $billsec
     * @return Pbxcdr
     */
    public function setBillsec($billsec)
    {
        $this->billsec = $billsec;

        return $this;
    }

    /**
     * Get billsec
     *
     * @return integer 
     */
    public function getBillsec()
    {
        return $this->billsec;
    }

    /**
     * Set disposition
     *
     * @param string $disposition
     * @return Pbxcdr
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;

        return $this;
    }

    /**
     * Get disposition
     *
     * @return string 
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Set amaflags
     *
     * @param integer $amaflags
     * @return Pbxcdr
     */
    public function setAmaflags($amaflags)
    {
        $this->amaflags = $amaflags;

        return $this;
    }

    /**
     * Get amaflags
     *
     * @return integer 
     */
    public function getAmaflags()
    {
        return $this->amaflags;
    }

    /**
     * Set accountcode
     *
     * @param string $accountcode
     * @return Pbxcdr
     */
    public function setAccountcode($accountcode)
    {
        $this->accountcode = $accountcode;

        return $this;
    }

    /**
     * Get accountcode
     *
     * @return string 
     */
    public function getAccountcode()
    {
        return $this->accountcode;
    }

    /**
     * Set userfield
     *
     * @param string $userfield
     * @return Pbxcdr
     */
    public function setUserfield($userfield)
    {
        $this->userfield = $userfield;

        return $this;
    }

    /**
     * Get userfield
     *
     * @return string 
     */
    public function getUserfield()
    {
        return $this->userfield;
    }

    /**
     * Set unique
     *
     * @param string $unique
     * @return Pbxcdr
     */
    public function setUnique($unique)
    {
        $this->unique = $unique;

        return $this;
    }

    /**
     * Get unique
     *
     * @return string 
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * Set linked
     *
     * @param string $linked
     * @return Pbxcdr
     */
    public function setLinked($linked)
    {
        $this->linked = $linked;

        return $this;
    }

    /**
     * Get linked
     *
     * @return string 
     */
    public function getLinked()
    {
        return $this->linked;
    }

    /**
     * Set sequence
     *
     * @param string $sequence
     * @return Pbxcdr
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return string 
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set peeraccount
     *
     * @param string $peeraccount
     * @return Pbxcdr
     */
    public function setPeeraccount($peeraccount)
    {
        $this->peeraccount = $peeraccount;

        return $this;
    }

    /**
     * Get peeraccount
     *
     * @return string 
     */
    public function getPeeraccount()
    {
        return $this->peeraccount;
    }

    /**
     * Set campaignid
     *
     * @param $campaignid
     * @return Pbxcdr
     */
    public function setCampaignid($campaignid = null)
    {
        $this->campaignid = $campaignid;

        return $this;
    }

    /**
     * Get campaignid
     *
     * @return \Core\AsteriskBundle\Entity\Campaign 
     */
    public function getCampaignid()
    {
        return $this->campaignid;
    }

    /**
     * Set callCenter
     *
     * @param $callCenter
     * @return Pbxcdr
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
     * Set contact
     *
     * @return Pbxcdr
     */
    public function setContact($contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     */
    public function getContact()
    {
        return $this->contact;
    }

    public function setContactdata($contactdata = null)
    {
        $this->contactdata = $contactdata;

        return $this;
    }

    /**
     * Get contact
     *
     * 
     */
    public function getContactdata()
    {
        return $this->contactdata;
    }

    /**
     * toString method
     */
    public function __toString()
    {
        $this->getCalldate();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cdrFiles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cdrFiles
     *
     * @param \Core\AsteriskBundle\Entity\PbxExternalRecordFile $cdrFiles
     * @return Pbxcdr
     */
    public function addCdrFile(\Core\AsteriskBundle\Entity\PbxExternalRecordFile $cdrFiles)
    {
        $this->cdrFiles[] = $cdrFiles;

        return $this;
    }

    /**
     * Remove cdrFiles
     *
     * @param \Core\AsteriskBundle\Entity\PbxExternalRecordFile $cdrFiles
     */
    public function removeCdrFile(\Core\AsteriskBundle\Entity\PbxExternalRecordFile $cdrFiles)
    {
        $this->cdrFiles->removeElement($cdrFiles);
    }

    /**
     * Get cdrFiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCdrFiles()
    {
        return $this->cdrFiles;
    }

    /**
     * Set campaign
     *
     * @param integer $campaign
     *
     * @return Cdr
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return integer
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

}
