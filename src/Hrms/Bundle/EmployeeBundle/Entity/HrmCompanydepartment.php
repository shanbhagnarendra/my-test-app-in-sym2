<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompanydepartment
 *
 * @ORM\Table(name="hrm_companydepartment")
 * @ORM\Entity
 */
class HrmCompanydepartment
{
    /**
     * @var string
     *
     * @ORM\Column(name="dept_name", type="string", length=255, nullable=false)
     */
    private $deptName;

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
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydivision
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydivision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="division", referencedColumnName="id")
     * })
     */
    private $division;



    /**
     * Set deptName
     *
     * @param string $deptName
     * @return HrmCompanydepartment
     */
    public function setDeptName($deptName)
    {
        $this->deptName = $deptName;
    
        return $this;
    }

    /**
     * Get deptName
     *
     * @return string 
     */
    public function getDeptName()
    {
        return $this->deptName;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return HrmCompanydepartment
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
     * Set division
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydivision $division
     * @return HrmCompanydepartment
     */
    public function setDivision(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydivision $division = null)
    {
        $this->division = $division;
    
        return $this;
    }

    /**
     * Get division
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydivision 
     */
    public function getDivision()
    {
        return $this->division;
    }
}