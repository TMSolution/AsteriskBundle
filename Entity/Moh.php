<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moh
 *
 * @ORM\Table(name="pbx_musiconhold")
 * @ORM\Entity
 */
class Moh
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
     * @ORM\Column(name="name", type="string", length=80, nullable=true)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=20, nullable=true)
     */
    private $mode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="directory", type="string", length=255, nullable=true)
     */
    private $directory;
    
     /**
     * @var string
     *
     * @ORM\Column(name="application", type="string", length=255, nullable=true)
     */
    private $application;
    
    /**
     * @var string
     *
     * @ORM\Column(name="digit", type="string", length=1, nullable=true)
     */
    private $digit;
    
     /**
     * @var string
     *
     * @ORM\Column(name="sort", type="string", length=10, nullable=true)
     */
    private $sort;

    
    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=10, nullable=true)
     */
    private $format;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stamp", type="datetime", nullable=true)
     */
    private $stamp;

   

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
     * Set name
     *
     * @param string $name
     *
     * @return Moh
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return Moh
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    
        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set directory
     *
     * @param string $directory
     *
     * @return Moh
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;
    
        return $this;
    }

    /**
     * Get directory
     *
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * Set application
     *
     * @param string $application
     *
     * @return Moh
     */
    public function setApplication($application)
    {
        $this->application = $application;
    
        return $this;
    }

    /**
     * Get application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set digit
     *
     * @param string $digit
     *
     * @return Moh
     */
    public function setDigit($digit)
    {
        $this->digit = $digit;
    
        return $this;
    }

    /**
     * Get digit
     *
     * @return string
     */
    public function getDigit()
    {
        return $this->digit;
    }

    /**
     * Set sort
     *
     * @param string $sort
     *
     * @return Moh
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    
        return $this;
    }

    /**
     * Get sort
     *
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return Moh
     */
    public function setFormat($format)
    {
        $this->format = $format;
    
        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     *
     * @return Moh
     */
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;
    
        return $this;
    }

    /**
     * Get stamp
     *
     * @return \DateTime
     */
    public function getStamp()
    {
        return $this->stamp;
    }
}
