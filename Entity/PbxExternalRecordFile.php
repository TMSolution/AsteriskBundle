<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Core\AsteriskBundle\Entity\BaseFile;
use CCO\CallCenterBundle\Entity\Campaign;
use CCO\UserBundle\Entity\User;

/**
 * PbxExternalRecordFile
 *
 * @ORM\Table(name="pbx_externalrecordfile")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class PbxExternalRecordFile extends BaseFile
{

    /**
     * @var File
     * 
     * @Vich\UploadableField(mapping="pbx_files", fileNameProperty="fileName")
     */
    protected $file;

    /*
     * @ORM\ManyToMany(targetEntity="Core\AsteriskBundle\Entity\Cdr", inversedBy="pbxRecordFiles",nullable=true)
     * @ORM\JoinTable(name="pbx.pbxcdr_has_pbxrecordfile", 
     *      joinColumns={ @ORM\JoinColumn(name="pbxrecordfile_id", referencedColumnName="id", unique=true) },
     *      inverseJoinColumns={ @ORM\JoinColumn(name="pbxcdr_id", referencedColumnName="id")})
     */
    protected $pbxcdr;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     *
     * @var pbxuniqid
     */
    protected $pbxuniqid;

    /**
     * @var \Campaign
     *
     * @ORM\ManyToOne(targetEntity="CCO\CallCenterBundle\Entity\Campaign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     * })
     */
    protected $campaign;

    /**
     * @var CCO\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CCO\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    protected $user;

    /**
     * @var \CallCenter
     *
     * @ORM\ManyToOne(targetEntity="CCO\CallCenterBundle\Entity\CallCenter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="callcenter_id", referencedColumnName="id")
     * })
     */
    protected $callCenter;

    /**
     * @var \ContactData
     *
     * @ORM\ManyToOne(targetEntity="CCO\CallCenterBundle\Entity\ContactData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contactdata_id", referencedColumnName="id")
     * })
     */
    protected $contactData;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

    /**
     * @var string
     *
     * @ORM\Column(name="direction", type="string", length=255, nullable=true)
     */
    protected $direction;

    //// EXTERNAL/CALLCENTER_${CALLCENTERID}/CAMPAIGN_${CAMPAIGNID}/CONTACTDATA_${CONTACTDATAID}/${DATE}/USER_${USERID}/${UNIQUEID}.gsm

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pbxcdr = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     */
    public function setFile(File $file = null)
    {
        $this->file = $file;

        if ($file) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->setUpdatedAt(new \DateTime('now'));
        }

        if (get_class($file) == 'Symfony\Component\HttpFoundation\File\UploadedFile') {
            $this->setFileSize($file->getClientSize());
            $this->setMimeType($file->getClientMimeType());

            $nameArr = explode('.', $file->getClientOriginalName());
            array_pop($nameArr);
            $this->setName(implode('.', $nameArr));
        }
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }

    public function setPbxuniqid($uniqId)
    {
        $this->pbxuniqid = $uniqId;

        return $this;
    }

    public function getPbxuniqid()
    {
        return $this->pbxuniqid;
    }

    /**
     * Add pbxcdr
     *
     * @param \Core\AsteriskBundle\Entity\Cdr $pbxcdr
     * @return PbxExternalRecordFile
     */
    public function addPbxcdr(\Core\AsteriskBundle\Entity\Cdr $pbxcdr)
    {
        $this->pbxcdr[] = $pbxcdr;

        return $this;
    }

    /**
     * Remove pbxcdr
     *
     * @param \Core\AsteriskBundle\Entity\Cdr $pbxcdr
     */
    public function removePbxcdr(\Core\AsteriskBundle\Entity\Cdr $pbxcdr)
    {
        $this->pbxcdr->removeElement($pbxcdr);
    }

    /**
     * Get pbxcdr
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPbxcdr()
    {
        return $this->pbxcdr;
    }

    public function setCallCenter(\CCO\CallCenterBundle\Entity\CallCenter $callCenter = null)
    {
        $this->callCenter = $callCenter;

        return $this;
    }

    public function getCallCenter()
    {
        return $this->callCenter;
    }

    /**
     * Set campaign
     *
     * @param \CCO\CallCenterBundle\Entity\Campaign $campaign
     * @return ContactData
     */
    public function setCampaign(\CCO\CallCenterBundle\Entity\Campaign $campaign = null)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return \CCO\CallCenterBundle\Entity\Campaign 
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set user
     *
     * @param \CCO\UserBundle\Entity\User $user
     * @return ContactData
     */
    public function setUser(\CCO\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CCO\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set contactData
     *
     * @param \CCO\CallCenterBundle\Entity\ContactData $contactData
     * @return Contact
     */
    public function setContactData(\CCO\CallCenterBundle\Entity\ContactData $contactData = null)
    {
        $this->contactData = $contactData;

        return $this;
    }

    /**
     * Get contactData
     *
     * @return \CCO\CallCenterBundle\Entity\ContactData 
     */
    public function getContactData()
    {
        return $this->contactData;
    }

    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

}
