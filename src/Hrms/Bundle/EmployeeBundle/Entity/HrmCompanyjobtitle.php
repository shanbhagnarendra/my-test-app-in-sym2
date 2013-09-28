<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompanyjobtitle
 *
 * @ORM\Table(name="hrm_companyjobtitle")
 * @ORM\Entity
 */
class HrmCompanyjobtitle
{
    /**
     * @var string
     *
     * @ORM\Column(name="job_title_name", type="string", length=255, nullable=false)
     */
    private $jobTitleName;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=false)
     */
    private $notes;

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
     *   @ORM\JoinColumn(name="compony", referencedColumnName="id")
     * })
     */
    private $compony;



    /**
     * Set jobTitleName
     *
     * @param string $jobTitleName
     * @return HrmCompanyjobtitle
     */
    public function setJobTitleName($jobTitleName)
    {
        $this->jobTitleName = $jobTitleName;
    
        return $this;
    }

    /**
     * Get jobTitleName
     *
     * @return string 
     */
    public function getJobTitleName()
    {
        return $this->jobTitleName;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return HrmCompanyjobtitle
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    
        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
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
     * Set compony
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $compony
     * @return HrmCompanyjobtitle
     */
    public function setCompony(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $compony = null)
    {
        $this->compony = $compony;
    
        return $this;
    }

    /**
     * Get compony
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany 
     */
    public function getCompony()
    {
        return $this->compony;
    }
}