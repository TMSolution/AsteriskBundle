<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PjsipDomainAliases
 *
 * @ORM\Table(name="pbx_pjsip_domain_aliases")
 * @ORM\Entity
 */
class PjsipDomainAliases
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
     * @ORM\Column(name="domain", type="string", length=40, nullable=true)
     */
    private $domain;

    
    


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
     * Set domain
     *
     * @param string $domain
     *
     * @return PjsipDomainAliases
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
}
