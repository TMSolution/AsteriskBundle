<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PjsipAor
 *
 * @ORM\Table(name="pbx_pjsip_aors")
 * @ORM\Entity
 */
class PjsipAor
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
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="default_expiration", type="integer", nullable=true)
     */
    private $defaultExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="mailboxes", type="string", length=80, nullable=true)
     */
    private $mailboxes;

    /**
     * @var string
     *
     * @ORM\Column(name="max_contacts", type="integer", nullable=true)
     */
    private $maxContacts;

    /**
     * @var string
     *
     * @ORM\Column(name="minimum_expiration", type="integer", nullable=true)
     */
    private $minimumExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="remove_existing", type="string", length=80, nullable=true)
     */
    private $removeExisting;

    /**
     * @var string
     *
     * @ORM\Column(name="qualify_frequency", type="integer", nullable=true)
     */
    private $qualifyFrequency;

    /**
     * @var string
     *
     * @ORM\Column(name="authenticate_qualify", type="string", length=10,  nullable=true)
     */
    private $authenticateQualify;

    /**
     * @var string
     *
     * @ORM\Column(name="maximum_expiration", type="integer",  nullable=true)
     */
    private $maximumExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="outbound_proxy", type="string",length=40, nullable=true)
     */
    private $outboundProxy;

    /**
     * @var string
     *
     * @ORM\Column(name="support_path", type="string", length=10, nullable=true)
     */
    private $supportPath;
    
    /**
     * @var string
     *
     * @ORM\Column(name="qualify_timeout", type="string", length=10, nullable=true)
     */
    private $qualifyTimeout;
    
    /**
     * @var string
     *
     * @ORM\Column(name="voicemail_extension", type="string", length=40, nullable=true)
     */
    private $voicemaiExtension;


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
     * Set contact
     *
     * @param string $contact
     *
     * @return PjsipAor
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set defaultExpiration
     *
     * @param integer $defaultExpiration
     *
     * @return PjsipAor
     */
    public function setDefaultExpiration($defaultExpiration)
    {
        $this->defaultExpiration = $defaultExpiration;
    
        return $this;
    }

    /**
     * Get defaultExpiration
     *
     * @return integer
     */
    public function getDefaultExpiration()
    {
        return $this->defaultExpiration;
    }

    /**
     * Set mailboxes
     *
     * @param string $mailboxes
     *
     * @return PjsipAor
     */
    public function setMailboxes($mailboxes)
    {
        $this->mailboxes = $mailboxes;
    
        return $this;
    }

    /**
     * Get mailboxes
     *
     * @return string
     */
    public function getMailboxes()
    {
        return $this->mailboxes;
    }

    /**
     * Set maxContacts
     *
     * @param integer $maxContacts
     *
     * @return PjsipAor
     */
    public function setMaxContacts($maxContacts)
    {
        $this->maxContacts = $maxContacts;
    
        return $this;
    }

    /**
     * Get maxContacts
     *
     * @return integer
     */
    public function getMaxContacts()
    {
        return $this->maxContacts;
    }

    /**
     * Set minimumExpiration
     *
     * @param integer $minimumExpiration
     *
     * @return PjsipAor
     */
    public function setMinimumExpiration($minimumExpiration)
    {
        $this->minimumExpiration = $minimumExpiration;
    
        return $this;
    }

    /**
     * Get minimumExpiration
     *
     * @return integer
     */
    public function getMinimumExpiration()
    {
        return $this->minimumExpiration;
    }

    /**
     * Set removeExisting
     *
     * @param string $removeExisting
     *
     * @return PjsipAor
     */
    public function setRemoveExisting($removeExisting)
    {
        $this->removeExisting = $removeExisting;
    
        return $this;
    }

    /**
     * Get removeExisting
     *
     * @return string
     */
    public function getRemoveExisting()
    {
        return $this->removeExisting;
    }

    /**
     * Set qualifyFrequency
     *
     * @param integer $qualifyFrequency
     *
     * @return PjsipAor
     */
    public function setQualifyFrequency($qualifyFrequency)
    {
        $this->qualifyFrequency = $qualifyFrequency;
    
        return $this;
    }

    /**
     * Get qualifyFrequency
     *
     * @return integer
     */
    public function getQualifyFrequency()
    {
        return $this->qualifyFrequency;
    }

    /**
     * Set authenticateQualify
     *
     * @param string $authenticateQualify
     *
     * @return PjsipAor
     */
    public function setAuthenticateQualify($authenticateQualify)
    {
        $this->authenticateQualify = $authenticateQualify;
    
        return $this;
    }

    /**
     * Get authenticateQualify
     *
     * @return string
     */
    public function getAuthenticateQualify()
    {
        return $this->authenticateQualify;
    }

    /**
     * Set maximumExpiration
     *
     * @param integer $maximumExpiration
     *
     * @return PjsipAor
     */
    public function setMaximumExpiration($maximumExpiration)
    {
        $this->maximumExpiration = $maximumExpiration;
    
        return $this;
    }

    /**
     * Get maximumExpiration
     *
     * @return integer
     */
    public function getMaximumExpiration()
    {
        return $this->maximumExpiration;
    }

    /**
     * Set outboundProxy
     *
     * @param string $outboundProxy
     *
     * @return PjsipAor
     */
    public function setOutboundProxy($outboundProxy)
    {
        $this->outboundProxy = $outboundProxy;
    
        return $this;
    }

    /**
     * Get outboundProxy
     *
     * @return string
     */
    public function getOutboundProxy()
    {
        return $this->outboundProxy;
    }

    /**
     * Set supportPath
     *
     * @param string $supportPath
     *
     * @return PjsipAor
     */
    public function setSupportPath($supportPath)
    {
        $this->supportPath = $supportPath;
    
        return $this;
    }

    /**
     * Get supportPath
     *
     * @return string
     */
    public function getSupportPath()
    {
        return $this->supportPath;
    }

    /**
     * Set qualifyTimeout
     *
     * @param string $qualifyTimeout
     *
     * @return PjsipAor
     */
    public function setQualifyTimeout($qualifyTimeout)
    {
        $this->qualifyTimeout = $qualifyTimeout;
    
        return $this;
    }

    /**
     * Get qualifyTimeout
     *
     * @return string
     */
    public function getQualifyTimeout()
    {
        return $this->qualifyTimeout;
    }

    /**
     * Set voicemaiExtension
     *
     * @param string $voicemaiExtension
     *
     * @return PjsipAor
     */
    public function setVoicemaiExtension($voicemaiExtension)
    {
        $this->voicemaiExtension = $voicemaiExtension;
    
        return $this;
    }

    /**
     * Get voicemaiExtension
     *
     * @return string
     */
    public function getVoicemaiExtension()
    {
        return $this->voicemaiExtension;
    }
}
