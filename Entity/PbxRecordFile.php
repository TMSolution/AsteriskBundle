<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Core\AsteriskBundle\Entity\BaseFile;

/**
 * PbxRecordFile
 *
 * @ORM\Table(name="pbx_recordfile")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class PbxRecordFile extends BaseFile
{

    /**
     * @var File
     * 
     * 
     * 
     * @Vich\UploadableField(mapping="pbx_files", fileNameProperty="fileName")
     */
    protected $file;

    /*
     * @ORM\ManyToMany(targetEntity="Core\AsteriskBundle\Entity\Cdr", inversedBy="pbxRecordFiles")
     * @ORM\JoinTable(name="pbx.pbxcdr_has_pbxrecordfile", 
     *      joinColumns={ @ORM\JoinColumn(name="pbxrecordfile_id", referencedColumnName="id", unique=true) },
     *      inverseJoinColumns={ @ORM\JoinColumn(name="pbxcdr_id", referencedColumnName="id")})
     */
    protected $pbxsdr;
    
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     *
     * @var pbxuniqid
     */
    protected $pbxuniqid;

    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->campaign = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     */
    public function setFile(File $file = null)
    {
        $this->file = $file;

        if ($file) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->setUpdatedAt(new \DateTime('now'));
        }

        if (get_class($file) == 'Symfony\Component\HttpFoundation\File\UploadedFile') {
            $this->setFileSize($file->getClientSize());
            $this->setMimeType($file->getClientMimeType());

            $nameArr = explode('.', $file->getClientOriginalName());
            array_pop($nameArr);
            $this->setName(implode('.', $nameArr));
        }
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }



    public function setPbxuniqid($uniqId)
    {
        $this->pbxuniqid = $uniqId;

        return $this;
    }

    public function getPbxuniqid()
    {
        return $this->pbxuniqid;
    }
    
    /**
     * Add pbxcdr
     *
     * @param \Core\AsteriskBundle\Entity\Cdr $pbxcdr
     * @return PbxRecordFile
     */
    public function addPbxcdr(\Core\AsteriskBundle\Entity\Cdr $pbxcdr)
    {
        $this->pbxcdr[] = $pbxcdr;

        return $this;
    }

    /**
     * Remove pbxcdr
     *
     * @param \Core\AsteriskBundle\Entity\Cdr $pbxcdr
     */
    public function removePbxcdr(\Core\AsteriskBundle\Entity\Cdr $pbxcdr)
    {
        $this->pbxcdr->removeElement($pbxcdr);
    }

    /**
     * Get pbxcdr
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPbxcdr()
    {
        return $this->pbxcdr;
    }

}
