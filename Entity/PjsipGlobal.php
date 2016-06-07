<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pbxsip
 *
 * @ORM\Table(name="pbx_pjsip_globals")
 * @ORM\Entity
 */
class PjsipGlobal
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
     * @ORM\Column(name="max_forwards", type="integer", nullable=true)
     */
    private $maxForwards;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=255, nullable=true)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="default_outbound_endpoint", type="string", length=40, nullable=true)
     */
    private $defaultOutboundEndpoint;

    /**
     * @var string
     *
     * @ORM\Column(name="debug", type="string", length=40, nullable=true)
     */
    private $debug;

    /**
     * @var string
     *
     * @ORM\Column(name="endpoint_identifier_order", type="string", length=40, nullable=true)
     */
    private $endpointIdentifierOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="max_initial_qualify_time", type="integer", nullable=true)
     */
    private $maxInitialQualifyTime;

    /**
     * @var string
     *
     * @ORM\Column(name="default_from_user", type="string", length=80, nullable=true)
     */
    private $defaultFromUser;

    /**
     * @var string
     *
     * @ORM\Column(name="keep_alive_interval", type="integer",  nullable=true)
     */
    private $keepAliveInterval;

    /**
     * @var string
     *
     * @ORM\Column(name="regcontext", type="string", length=80, nullable=true)
     */
    private $regContext;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_expiration_check_interval", type="integer", nullable=true)
     */
    private $contactExpirationCheckInterval;

    /**
     * @var string
     *
     * @ORM\Column(name="default_voicemail_extension", type="string", length=40, nullable=true)
     */
    private $defaultVoicemailExtension;


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
     * Set maxForwards
     *
     * @param integer $maxForwards
     *
     * @return PjsipGlobal
     */
    public function setMaxForwards($maxForwards)
    {
        $this->maxForwards = $maxForwards;
    
        return $this;
    }

    /**
     * Get maxForwards
     *
     * @return integer
     */
    public function getMaxForwards()
    {
        return $this->maxForwards;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return PjsipGlobal
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    
        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set defaultOutboundEndpoint
     *
     * @param string $defaultOutboundEndpoint
     *
     * @return PjsipGlobal
     */
    public function setDefaultOutboundEndpoint($defaultOutboundEndpoint)
    {
        $this->defaultOutboundEndpoint = $defaultOutboundEndpoint;
    
        return $this;
    }

    /**
     * Get defaultOutboundEndpoint
     *
     * @return string
     */
    public function getDefaultOutboundEndpoint()
    {
        return $this->defaultOutboundEndpoint;
    }

    /**
     * Set debug
     *
     * @param string $debug
     *
     * @return PjsipGlobal
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    
        return $this;
    }

    /**
     * Get debug
     *
     * @return string
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Set endpointIdentifierOrder
     *
     * @param string $endpointIdentifierOrder
     *
     * @return PjsipGlobal
     */
    public function setEndpointIdentifierOrder($endpointIdentifierOrder)
    {
        $this->endpointIdentifierOrder = $endpointIdentifierOrder;
    
        return $this;
    }

    /**
     * Get endpointIdentifierOrder
     *
     * @return string
     */
    public function getEndpointIdentifierOrder()
    {
        return $this->endpointIdentifierOrder;
    }

    /**
     * Set maxInitialQualifyTime
     *
     * @param integer $maxInitialQualifyTime
     *
     * @return PjsipGlobal
     */
    public function setMaxInitialQualifyTime($maxInitialQualifyTime)
    {
        $this->maxInitialQualifyTime = $maxInitialQualifyTime;
    
        return $this;
    }

    /**
     * Get maxInitialQualifyTime
     *
     * @return integer
     */
    public function getMaxInitialQualifyTime()
    {
        return $this->maxInitialQualifyTime;
    }

    /**
     * Set defaultFromUser
     *
     * @param string $defaultFromUser
     *
     * @return PjsipGlobal
     */
    public function setDefaultFromUser($defaultFromUser)
    {
        $this->defaultFromUser = $defaultFromUser;
    
        return $this;
    }

    /**
     * Get defaultFromUser
     *
     * @return string
     */
    public function getDefaultFromUser()
    {
        return $this->defaultFromUser;
    }

    /**
     * Set keepAliveInterval
     *
     * @param integer $keepAliveInterval
     *
     * @return PjsipGlobal
     */
    public function setKeepAliveInterval($keepAliveInterval)
    {
        $this->keepAliveInterval = $keepAliveInterval;
    
        return $this;
    }

    /**
     * Get keepAliveInterval
     *
     * @return integer
     */
    public function getKeepAliveInterval()
    {
        return $this->keepAliveInterval;
    }

    /**
     * Set regContext
     *
     * @param string $regContext
     *
     * @return PjsipGlobal
     */
    public function setRegContext($regContext)
    {
        $this->regContext = $regContext;
    
        return $this;
    }

    /**
     * Get regContext
     *
     * @return string
     */
    public function getRegContext()
    {
        return $this->regContext;
    }

    /**
     * Set contactExpirationCheckInterval
     *
     * @param integer $contactExpirationCheckInterval
     *
     * @return PjsipGlobal
     */
    public function setContactExpirationCheckInterval($contactExpirationCheckInterval)
    {
        $this->contactExpirationCheckInterval = $contactExpirationCheckInterval;
    
        return $this;
    }

    /**
     * Get contactExpirationCheckInterval
     *
     * @return integer
     */
    public function getContactExpirationCheckInterval()
    {
        return $this->contactExpirationCheckInterval;
    }

    /**
     * Set defaultVoicemailExtension
     *
     * @param string $defaultVoicemailExtension
     *
     * @return PjsipGlobal
     */
    public function setDefaultVoicemailExtension($defaultVoicemailExtension)
    {
        $this->defaultVoicemailExtension = $defaultVoicemailExtension;
    
        return $this;
    }

    /**
     * Get defaultVoicemailExtension
     *
     * @return string
     */
    public function getDefaultVoicemailExtension()
    {
        return $this->defaultVoicemailExtension;
    }
}
