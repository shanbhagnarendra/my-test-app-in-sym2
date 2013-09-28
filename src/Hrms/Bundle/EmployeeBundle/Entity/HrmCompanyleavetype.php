<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompanyleavetype
 *
 * @ORM\Table(name="hrm_companyleavetype")
 * @ORM\Entity
 */
class HrmCompanyleavetype
{
    /**
     * @var string
     *
     * @ORM\Column(name="leave_type", type="text", nullable=false)
     */
    private $leaveType;

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
     * Set leaveType
     *
     * @param string $leaveType
     * @return HrmCompanyleavetype
     */
    public function setLeaveType($leaveType)
    {
        $this->leaveType = $leaveType;
    
        return $this;
    }

    /**
     * Get leaveType
     *
     * @return string 
     */
    public function getLeaveType()
    {
        return $this->leaveType;
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
     * @return HrmCompanyleavetype
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