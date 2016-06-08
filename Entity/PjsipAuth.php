<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PjsipAuth
 *
 * @ORM\Table(name="pbx_pjsip_auths")
 * @ORM\Entity
 */
class PjsipAuth
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_type", type="string", length=20, nullable=true)
     */
    private $authType;

    /**
     * @var string
     *
     * @ORM\Column(name="nonce_lifetime", type="integer", nullable=true)
     */
    private $nonceLifetime;

    /**
     * @var string
     *
     * @ORM\Column(name="md5_cred", type="string", length=40, nullable=true)
     */
    private $md5Cred;

    /**
     * @var string
     *
     * @ORM\Column(name="password",type="string", length=80, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="realm", type="string", length=40, nullable=true)
     */
    private $realm;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=40, nullable=true)
     */
    private $userName;

    
    public function setId($id)
    {
        $this->id = $id;
    }

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
     * Set authType
     *
     * @param string $authType
     *
     * @return PjsipAuth
     */
    public function setAuthType($authType)
    {
        $this->authType = $authType;
    
        return $this;
    }

    /**
     * Get authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Set nonceLifetime
     *
     * @param integer $nonceLifetime
     *
     * @return PjsipAuth
     */
    public function setNonceLifetime($nonceLifetime)
    {
        $this->nonceLifetime = $nonceLifetime;
    
        return $this;
    }

    /**
     * Get nonceLifetime
     *
     * @return integer
     */
    public function getNonceLifetime()
    {
        return $this->nonceLifetime;
    }

    /**
     * Set md5Cred
     *
     * @param string $md5Cred
     *
     * @return PjsipAuth
     */
    public function setMd5Cred($md5Cred)
    {
        $this->md5Cred = $md5Cred;
    
        return $this;
    }

    /**
     * Get md5Cred
     *
     * @return string
     */
    public function getMd5Cred()
    {
        return $this->md5Cred;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return PjsipAuth
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
     * Set realm
     *
     * @param string $realm
     *
     * @return PjsipAuth
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
    
        return $this;
    }

    /**
     * Get realm
     *
     * @return string
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return PjsipAuth
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }
}
