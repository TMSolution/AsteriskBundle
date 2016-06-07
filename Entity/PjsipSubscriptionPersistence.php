<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pbxsip
 *
 * @ORM\Table(name="pbx_pjsip_subscription_persistence")
 * @ORM\Entity
 */
class PjsipSubscriptionPersistence
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
     * @ORM\Column(name="packet", type="string",length=2048, nullable=true)
     */
    private $packet;

    /**
     * @var string
     *
     * @ORM\Column(name="src_name", type="string", length=128, nullable=true)
     */
    private $srcName;

    /**
     * @var string
     *
     * @ORM\Column(name="src_port", type="integer", nullable=true)
     */
    private $srcPort;

    /**
     * @var string
     *
     * @ORM\Column(name="transport_key", type="string",length=64, nullable=true)
     */
    private $transportKey;

    /**
     * @var string
     *
     * @ORM\Column(name="local_name", type="string", length=128, nullable=true)
     */
    private $localName;

    /**
     * @var string
     *
     * @ORM\Column(name="local_port", type="integer", nullable=true)
     */
    private $localPort;

    /**
     * @var string
     *
     * @ORM\Column(name="cseq", type="integer", nullable=true)
     */
    private $cseq;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=128, nullable=true)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="endpoint", type="string", length=40, nullable=true)
     */
    private $endpoint;

    /**
     * @var string
     *
     * @ORM\Column(name="expires", type="integer", nullable=true)
     */
    private $expires;


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
     * Set packet
     *
     * @param string $packet
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setPacket($packet)
    {
        $this->packet = $packet;
    
        return $this;
    }

    /**
     * Get packet
     *
     * @return string
     */
    public function getPacket()
    {
        return $this->packet;
    }

    /**
     * Set srcName
     *
     * @param string $srcName
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setSrcName($srcName)
    {
        $this->srcName = $srcName;
    
        return $this;
    }

    /**
     * Get srcName
     *
     * @return string
     */
    public function getSrcName()
    {
        return $this->srcName;
    }

    /**
     * Set srcPort
     *
     * @param integer $srcPort
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setSrcPort($srcPort)
    {
        $this->srcPort = $srcPort;
    
        return $this;
    }

    /**
     * Get srcPort
     *
     * @return integer
     */
    public function getSrcPort()
    {
        return $this->srcPort;
    }

    /**
     * Set transportKey
     *
     * @param string $transportKey
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setTransportKey($transportKey)
    {
        $this->transportKey = $transportKey;
    
        return $this;
    }

    /**
     * Get transportKey
     *
     * @return string
     */
    public function getTransportKey()
    {
        return $this->transportKey;
    }

    /**
     * Set localName
     *
     * @param string $localName
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setLocalName($localName)
    {
        $this->localName = $localName;
    
        return $this;
    }

    /**
     * Get localName
     *
     * @return string
     */
    public function getLocalName()
    {
        return $this->localName;
    }

    /**
     * Set localPort
     *
     * @param integer $localPort
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setLocalPort($localPort)
    {
        $this->localPort = $localPort;
    
        return $this;
    }

    /**
     * Get localPort
     *
     * @return integer
     */
    public function getLocalPort()
    {
        return $this->localPort;
    }

    /**
     * Set cseq
     *
     * @param integer $cseq
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setCseq($cseq)
    {
        $this->cseq = $cseq;
    
        return $this;
    }

    /**
     * Get cseq
     *
     * @return integer
     */
    public function getCseq()
    {
        return $this->cseq;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set endpoint
     *
     * @param string $endpoint
     *
     * @return PjsipSubscriptionPersistence
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

    /**
     * Set expires
     *
     * @param integer $expires
     *
     * @return PjsipSubscriptionPersistence
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
    
        return $this;
    }

    /**
     * Get expires
     *
     * @return integer
     */
    public function getExpires()
    {
        return $this->expires;
    }
}
