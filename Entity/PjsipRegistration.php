<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pbxsip
 *
 * @ORM\Table(name="pbx_pjsip_registrations")
 * @ORM\Entity
 */
class PjsipRegistration
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
     * @ORM\Column(name="auth_rejection_permanent", type="string",length=10, nullable=true)
     */
    private $authRejectionPermanent;

    /**
     * @var string
     *
     * @ORM\Column(name="client_uri", type="string", length=255, nullable=true)
     */
    private $clientUri;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_user", type="string", length=40, nullable=true)
     */
    private $contactUser;

    /**
     * @var string
     *
     * @ORM\Column(name="expiration", type="integer", nullable=true)
     */
    private $expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="max_retries", type="integer", nullable=true)
     */
    private $maxRetries;

    /**
     * @var string
     *
     * @ORM\Column(name="outbound_auth", type="string",length=40,  nullable=true)
     */
    private $outboundAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="outbound_proxy", type="string", length=40, nullable=true)
     */
    private $outboundProxy;

    /**
     * @var string
     *
     * @ORM\Column(name="keep_alive_interval", type="integer",  nullable=true)
     */
    private $retryInterval;

    /**
     * @var string
     *
     * @ORM\Column(name="forbidden_retry_interval", type="integer", nullable=true)
     */
    private $forbiddenRetryInterval;

    /**
     * @var string
     *
     * @ORM\Column(name="server_uri", type="string", length=255, nullable=true)
     */
    private $serverUri;

    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=40, nullable=true)
     */
    private $transport;

    /**
     * @var string
     *
     * @ORM\Column(name="support_path", type="string", length=10, nullable=true)
     */
    private $supportPath;

    /**
     * @var string
     *
     * @ORM\Column(name="fatal_retry_interval", type="integer", nullable=true)
     */
    private $fatalRetryIinterval;

    /**
     * @var string
     *
     * @ORM\Column(name="line", type="string", length=10, nullable=true)
     */
    private $line;

    /**
     * @var string
     *
     * @ORM\Column(name="endpoint", type="string", length=40, nullable=true)
     */
    private $endpoint;


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
     * Set authRejectionPermanent
     *
     * @param string $authRejectionPermanent
     *
     * @return PjsipRegistration
     */
    public function setAuthRejectionPermanent($authRejectionPermanent)
    {
        $this->authRejectionPermanent = $authRejectionPermanent;
    
        return $this;
    }

    /**
     * Get authRejectionPermanent
     *
     * @return string
     */
    public function getAuthRejectionPermanent()
    {
        return $this->authRejectionPermanent;
    }

    /**
     * Set clientUri
     *
     * @param string $clientUri
     *
     * @return PjsipRegistration
     */
    public function setClientUri($clientUri)
    {
        $this->clientUri = $clientUri;
    
        return $this;
    }

    /**
     * Get clientUri
     *
     * @return string
     */
    public function getClientUri()
    {
        return $this->clientUri;
    }

    /**
     * Set contactUser
     *
     * @param string $contactUser
     *
     * @return PjsipRegistration
     */
    public function setContactUser($contactUser)
    {
        $this->contactUser = $contactUser;
    
        return $this;
    }

    /**
     * Get contactUser
     *
     * @return string
     */
    public function getContactUser()
    {
        return $this->contactUser;
    }

    /**
     * Set expiration
     *
     * @param integer $expiration
     *
     * @return PjsipRegistration
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    
        return $this;
    }

    /**
     * Get expiration
     *
     * @return integer
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set maxRetries
     *
     * @param integer $maxRetries
     *
     * @return PjsipRegistration
     */
    public function setMaxRetries($maxRetries)
    {
        $this->maxRetries = $maxRetries;
    
        return $this;
    }

    /**
     * Get maxRetries
     *
     * @return integer
     */
    public function getMaxRetries()
    {
        return $this->maxRetries;
    }

    /**
     * Set outboundAuth
     *
     * @param string $outboundAuth
     *
     * @return PjsipRegistration
     */
    public function setOutboundAuth($outboundAuth)
    {
        $this->outboundAuth = $outboundAuth;
    
        return $this;
    }

    /**
     * Get outboundAuth
     *
     * @return string
     */
    public function getOutboundAuth()
    {
        return $this->outboundAuth;
    }

    /**
     * Set outboundProxy
     *
     * @param string $outboundProxy
     *
     * @return PjsipRegistration
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
     * Set retryInterval
     *
     * @param integer $retryInterval
     *
     * @return PjsipRegistration
     */
    public function setRetryInterval($retryInterval)
    {
        $this->retryInterval = $retryInterval;
    
        return $this;
    }

    /**
     * Get retryInterval
     *
     * @return integer
     */
    public function getRetryInterval()
    {
        return $this->retryInterval;
    }

    /**
     * Set forbiddenRetryInterval
     *
     * @param integer $forbiddenRetryInterval
     *
     * @return PjsipRegistration
     */
    public function setForbiddenRetryInterval($forbiddenRetryInterval)
    {
        $this->forbiddenRetryInterval = $forbiddenRetryInterval;
    
        return $this;
    }

    /**
     * Get forbiddenRetryInterval
     *
     * @return integer
     */
    public function getForbiddenRetryInterval()
    {
        return $this->forbiddenRetryInterval;
    }

    /**
     * Set serverUri
     *
     * @param string $serverUri
     *
     * @return PjsipRegistration
     */
    public function setServerUri($serverUri)
    {
        $this->serverUri = $serverUri;
    
        return $this;
    }

    /**
     * Get serverUri
     *
     * @return string
     */
    public function getServerUri()
    {
        return $this->serverUri;
    }

    /**
     * Set transport
     *
     * @param string $transport
     *
     * @return PjsipRegistration
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
    
        return $this;
    }

    /**
     * Get transport
     *
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set supportPath
     *
     * @param string $supportPath
     *
     * @return PjsipRegistration
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
     * Set fatalRetryIinterval
     *
     * @param integer $fatalRetryIinterval
     *
     * @return PjsipRegistration
     */
    public function setFatalRetryIinterval($fatalRetryIinterval)
    {
        $this->fatalRetryIinterval = $fatalRetryIinterval;
    
        return $this;
    }

    /**
     * Get fatalRetryIinterval
     *
     * @return integer
     */
    public function getFatalRetryIinterval()
    {
        return $this->fatalRetryIinterval;
    }

    /**
     * Set line
     *
     * @param string $line
     *
     * @return PjsipRegistration
     */
    public function setLine($line)
    {
        $this->line = $line;
    
        return $this;
    }

    /**
     * Get line
     *
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set endpoint
     *
     * @param string $endpoint
     *
     * @return PjsipRegistration
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    
        return $this;
    }

    /**
     * Get endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }
}
