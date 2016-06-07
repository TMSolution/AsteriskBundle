<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QueueMember
 *
 * @ORM\Table(name="pbx_queue_rule")
 * @ORM\Entity
 */
class QueueRule
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_name", type="string", length=80, nullable=true)
     */
    private $ruleName;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=32, nullable=true)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="min_penalty", type="string", length=32, nullable=true)
     */
    private $minPenalty;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_penalty",  type="string", length=32, nullable=true)
     */
    private $maxPenalty;

    

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
     * Set ruleName
     *
     * @param string $ruleName
     *
     * @return QueueRule
     */
    public function setRuleName($ruleName)
    {
        $this->ruleName = $ruleName;
    
        return $this;
    }

    /**
     * Get ruleName
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->ruleName;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return QueueRule
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set minPenalty
     *
     * @param string $minPenalty
     *
     * @return QueueRule
     */
    public function setMinPenalty($minPenalty)
    {
        $this->minPenalty = $minPenalty;
    
        return $this;
    }

    /**
     * Get minPenalty
     *
     * @return string
     */
    public function getMinPenalty()
    {
        return $this->minPenalty;
    }

    /**
     * Set maxPenalty
     *
     * @param string $maxPenalty
     *
     * @return QueueRule
     */
    public function setMaxPenalty($maxPenalty)
    {
        $this->maxPenalty = $maxPenalty;
    
        return $this;
    }

    /**
     * Get maxPenalty
     *
     * @return string
     */
    public function getMaxPenalty()
    {
        return $this->maxPenalty;
    }
}
