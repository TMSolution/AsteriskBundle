<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PjsipContact
 *
 * @ORM\Table(name="pbx_pjsip_contacts")
 * @ORM\Entity
 */
class PjsipContact
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
     * @ORM\Column(name="uri", type="string", length=255, nullable=true)
     */
    private $uri;

    /**
     * @var string
     *
     * @ORM\Column(name="expiration_time", type="string", length=40, nullable=true)
     */
    private $expirationTime;

    /**
     * @var string
     *
     * @ORM\Column(name="qualify_frequency", type="integer",  nullable=true)
     */
    private $qualifyFrequency;

    /**
     * @var string
     *
     * @ORM\Column(name="outbound_proxy",type="string", length=40, nullable=true)
     */
    private $outboundProxy;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=255, nullable=true)
     */
    private $userAgent;
    
    /**
     * @var string
     *
     * @ORM\Column(name="qualify_timeout", type="string", length=20,  nullable=true)
     */
    private $qualifyTimeout;

    


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
     * Set uri
     *
     * @param string $uri
     *
     * @return PjsipContact
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    
        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set expirationTime
     *
     * @param string $expirationTime
     *
     * @return PjsipContact
     */
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
    
        return $this;
    }

    /**
     * Get expirationTime
     *
     * @return string
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * Set qualifyFrequency
     *
     * @param integer $qualifyFrequency
     *
     * @return PjsipContact
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
     * Set outboundProxy
     *
     * @param string $outboundProxy
     *
     * @return PjsipContact
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
     * Set path
     *
     * @param string $path
     *
     * @return PjsipContact
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return PjsipContact
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
     * Set qualifyTimeout
     *
     * @param string $qualifyTimeout
     *
     * @return PjsipContact
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
}
