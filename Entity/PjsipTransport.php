<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pbxsip
 *
 * @ORM\Table(name="pbx_pjsip_transports")
 * @ORM\Entity
 */
class PjsipTransport
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
     * @ORM\Column(name="async_operations", type="integer", nullable=true)
     */
    private $asyncOperations;

    /**
     * @var integer
     *
     * @ORM\Column(name="bind", type="string",length=40, nullable=true)
     */
    private $bind;

    /**
     * @var string
     *
     * @ORM\Column(name="ca_list_file", type="string",length=200, nullable=true)
     */
    private $caListFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="cert_file", type="string",length=200,  nullable=true)
     */
    private $certFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="cipher", type="string",length=200,  nullable=true)
     */
    private $cipher;

    /**
     * @var integer
     *
     * @ORM\Column(name="domain", type="string",length=40, nullable=true)
     */
    private $domain;

    /**
     * @var integer
     *
     * @ORM\Column(name="external_media_address", type="string",length=40, nullable=true)
     */
    private $externalMediaAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="external_signaling_address", type="string", length=40, nullable=true)
     */
    private $externalSignalingAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="external_signaling_port", type="integer", nullable=true)
     */
    private $externalSignalingPort;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=20, nullable=true)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="local_net", type="string", length=40, nullable=true)
     */
    private $localNet;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="priv_key_file", type="string", length=40, nullable=true)
     */
    private $privKeyFile;

    /**
     * @var string
     *
     * @ORM\Column(name="protocol", type="string", length=10, nullable=true)
     */
    private $protocol;

    /**
     * @var string
     *
     * @ORM\Column(name="require_client_cert", type="string", length=10, nullable=true)
     */
    private $requireClientCert;

    /**
     * @var string
     *
     * @ORM\Column(name="verify_client", type="string", length=10, nullable=true)
     */
    private $verifyClient;

    /**
     * @var string
     *
     * @ORM\Column(name="verify_server", type="string", length=10, nullable=true)
     */
    private $verifyServer;

    /**
     * @var string
     *
     * @ORM\Column(name="tos", type="string", length=10, nullable=true)
     */
    private $tos;

    /**
     * @var string
     *
     * @ORM\Column(name="cos", type="integer", nullable=true)
     */
    private $cos;

    /**
     * @var string
     *
     * @ORM\Column(name="allow_reload", type="string", length=10, nullable=true)
     */
    private $allowReload;


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
     * Set asyncOperations
     *
     * @param integer $asyncOperations
     *
     * @return PjsipTransport
     */
    public function setAsyncOperations($asyncOperations)
    {
        $this->asyncOperations = $asyncOperations;
    
        return $this;
    }

    /**
     * Get asyncOperations
     *
     * @return integer
     */
    public function getAsyncOperations()
    {
        return $this->asyncOperations;
    }

    /**
     * Set bind
     *
     * @param string $bind
     *
     * @return PjsipTransport
     */
    public function setBind($bind)
    {
        $this->bind = $bind;
    
        return $this;
    }

    /**
     * Get bind
     *
     * @return string
     */
    public function getBind()
    {
        return $this->bind;
    }

    /**
     * Set caListFile
     *
     * @param string $caListFile
     *
     * @return PjsipTransport
     */
    public function setCaListFile($caListFile)
    {
        $this->caListFile = $caListFile;
    
        return $this;
    }

    /**
     * Get caListFile
     *
     * @return string
     */
    public function getCaListFile()
    {
        return $this->caListFile;
    }

    /**
     * Set certFile
     *
     * @param string $certFile
     *
     * @return PjsipTransport
     */
    public function setCertFile($certFile)
    {
        $this->certFile = $certFile;
    
        return $this;
    }

    /**
     * Get certFile
     *
     * @return string
     */
    public function getCertFile()
    {
        return $this->certFile;
    }

    /**
     * Set cipher
     *
     * @param string $cipher
     *
     * @return PjsipTransport
     */
    public function setCipher($cipher)
    {
        $this->cipher = $cipher;
    
        return $this;
    }

    /**
     * Get cipher
     *
     * @return string
     */
    public function getCipher()
    {
        return $this->cipher;
    }

    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return PjsipTransport
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    
        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set externalMediaAddress
     *
     * @param string $externalMediaAddress
     *
     * @return PjsipTransport
     */
    public function setExternalMediaAddress($externalMediaAddress)
    {
        $this->externalMediaAddress = $externalMediaAddress;
    
        return $this;
    }

    /**
     * Get externalMediaAddress
     *
     * @return string
     */
    public function getExternalMediaAddress()
    {
        return $this->externalMediaAddress;
    }

    /**
     * Set externalSignalingAddress
     *
     * @param string $externalSignalingAddress
     *
     * @return PjsipTransport
     */
    public function setExternalSignalingAddress($externalSignalingAddress)
    {
        $this->externalSignalingAddress = $externalSignalingAddress;
    
        return $this;
    }

    /**
     * Get externalSignalingAddress
     *
     * @return string
     */
    public function getExternalSignalingAddress()
    {
        return $this->externalSignalingAddress;
    }

    /**
     * Set externalSignalingPort
     *
     * @param integer $externalSignalingPort
     *
     * @return PjsipTransport
     */
    public function setExternalSignalingPort($externalSignalingPort)
    {
        $this->externalSignalingPort = $externalSignalingPort;
    
        return $this;
    }

    /**
     * Get externalSignalingPort
     *
     * @return integer
     */
    public function getExternalSignalingPort()
    {
        return $this->externalSignalingPort;
    }

    /**
     * Set method
     *
     * @param string $method
     *
     * @return PjsipTransport
     */
    public function setMethod($method)
    {
        $this->method = $method;
    
        return $this;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set localNet
     *
     * @param string $localNet
     *
     * @return PjsipTransport
     */
    public function setLocalNet($localNet)
    {
        $this->localNet = $localNet;
    
        return $this;
    }

    /**
     * Get localNet
     *
     * @return string
     */
    public function getLocalNet()
    {
        return $this->localNet;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return PjsipTransport
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set privKeyFile
     *
     * @param string $privKeyFile
     *
     * @return PjsipTransport
     */
    public function setPrivKeyFile($privKeyFile)
    {
        $this->privKeyFile = $privKeyFile;
    
        return $this;
    }

    /**
     * Get privKeyFile
     *
     * @return string
     */
    public function getPrivKeyFile()
    {
        return $this->privKeyFile;
    }

    /**
     * Set protocol
     *
     * @param string $protocol
     *
     * @return PjsipTransport
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    
        return $this;
    }

    /**
     * Get protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Set requireClientCert
     *
     * @param string $requireClientCert
     *
     * @return PjsipTransport
     */
    public function setRequireClientCert($requireClientCert)
    {
        $this->requireClientCert = $requireClientCert;
    
        return $this;
    }

    /**
     * Get requireClientCert
     *
     * @return string
     */
    public function getRequireClientCert()
    {
        return $this->requireClientCert;
    }

    /**
     * Set verifyClient
     *
     * @param string $verifyClient
     *
     * @return PjsipTransport
     */
    public function setVerifyClient($verifyClient)
    {
        $this->verifyClient = $verifyClient;
    
        return $this;
    }

    /**
     * Get verifyClient
     *
     * @return string
     */
    public function getVerifyClient()
    {
        return $this->verifyClient;
    }

    /**
     * Set verifyServer
     *
     * @param string $verifyServer
     *
     * @return PjsipTransport
     */
    public function setVerifyServer($verifyServer)
    {
        $this->verifyServer = $verifyServer;
    
        return $this;
    }

    /**
     * Get verifyServer
     *
     * @return string
     */
    public function getVerifyServer()
    {
        return $this->verifyServer;
    }

    /**
     * Set tos
     *
     * @param string $tos
     *
     * @return PjsipTransport
     */
    public function setTos($tos)
    {
        $this->tos = $tos;
    
        return $this;
    }

    /**
     * Get tos
     *
     * @return string
     */
    public function getTos()
    {
        return $this->tos;
    }

    /**
     * Set cos
     *
     * @param integer $cos
     *
     * @return PjsipTransport
     */
    public function setCos($cos)
    {
        $this->cos = $cos;
    
        return $this;
    }

    /**
     * Get cos
     *
     * @return integer
     */
    public function getCos()
    {
        return $this->cos;
    }

    /**
     * Set allowReload
     *
     * @param string $allowReload
     *
     * @return PjsipTransport
     */
    public function setAllowReload($allowReload)
    {
        $this->allowReload = $allowReload;
    
        return $this;
    }

    /**
     * Get allowReload
     *
     * @return string
     */
    public function getAllowReload()
    {
        return $this->allowReload;
    }
}
