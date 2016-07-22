<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PjsipDomainAliases
 *
 * @ORM\Table(name="pbx_pjsip_endpoint_id_ips")
 * @ORM\Entity
 */
class PjsipEndpointIdIps
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="string", nullable=false, length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="endpoint", type="string", length=40, nullable=true)
     */
    private $endpoint;
    
    /**
     * @var string
     *
     * @ORM\Column(name="match", type="string", length=80, nullable=true)
     */
    private $match;

    
    


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
     * Set endpoint
     *
     * @param string $endpoint
     *
     * @return PjsipEndpointIdIps
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
     * Set match
     *
     * @param string $match
     *
     * @return PjsipEndpointIdIps
     */
    public function setMatch($match)
    {
        $this->match = $match;
    
        return $this;
    }

    /**
     * Get match
     *
     * @return string
     */
    public function getMatch()
    {
        return $this->match;
    }
}
