<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompanyteam
 *
 * @ORM\Table(name="hrm_companyteam")
 * @ORM\Entity
 */
class HrmCompanyteam
{
    /**
     * @var string
     *
     * @ORM\Column(name="team_name", type="string", length=255, nullable=false)
     */
    private $teamName;

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
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="department", referencedColumnName="id")
     * })
     */
    private $department;



    /**
     * Set teamName
     *
     * @param string $teamName
     * @return HrmCompanyteam
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    
        return $this;
    }

    /**
     * Get teamName
     *
     * @return string 
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return HrmCompanyteam
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
     * Set department
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment $department
     * @return HrmCompanyteam
     */
    public function setDepartment(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment $department = null)
    {
        $this->department = $department;
    
        return $this;
    }

    /**
     * Get department
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment 
     */
    public function getDepartment()
    {
        return $this->department;
    }
}