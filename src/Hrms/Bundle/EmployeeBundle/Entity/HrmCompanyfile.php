<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompanyfile
 *
 * @ORM\Table(name="hrm_companyfile")
 * @ORM\Entity
 */
class HrmCompanyfile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_folder", type="integer", nullable=false)
     */
    private $idFolder;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=false)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="filesize", type="string", length=20, nullable=true)
     */
    private $filesize;

    /**
     * @var string
     *
     * @ORM\Column(name="file_ext_type", type="string", length=5, nullable=true)
     */
    private $fileExtType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_date", type="datetime", nullable=false)
     */
    private $addDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company", referencedColumnName="id")
     * })
     */
    private $company;



    /**
     * Set idFolder
     *
     * @param integer $idFolder
     * @return HrmCompanyfile
     */
    public function setIdFolder($idFolder)
    {
        $this->idFolder = $idFolder;
    
        return $this;
    }

    /**
     * Get idFolder
     *
     * @return integer 
     */
    public function getIdFolder()
    {
        return $this->idFolder;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return HrmCompanyfile
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set filesize
     *
     * @param string $filesize
     * @return HrmCompanyfile
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;
    
        return $this;
    }

    /**
     * Get filesize
     *
     * @return string 
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set fileExtType
     *
     * @param string $fileExtType
     * @return HrmCompanyfile
     */
    public function setFileExtType($fileExtType)
    {
        $this->fileExtType = $fileExtType;
    
        return $this;
    }

    /**
     * Get fileExtType
     *
     * @return string 
     */
    public function getFileExtType()
    {
        return $this->fileExtType;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return HrmCompanyfile
     */
    public function setAddDate($addDate)
    {
        $this->addDate = $addDate;
    
        return $this;
    }

    /**
     * Get addDate
     *
     * @return \DateTime 
     */
    public function getAddDate()
    {
        return $this->addDate;
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
     * Set company
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company
     * @return HrmCompanyfile
     */
    public function setCompany(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company = null)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany 
     */
    public function getCompany()
    {
        return $this->company;
    }
}