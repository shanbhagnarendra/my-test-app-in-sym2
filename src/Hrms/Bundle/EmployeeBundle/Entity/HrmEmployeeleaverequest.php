<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmEmployeeleaverequest
 *
 * @ORM\Table(name="hrm_employeeleaverequest")
 * @ORM\Entity
 */
class HrmEmployeeleaverequest
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from_date", type="date", nullable=false)
     */
    private $fromDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to_date", type="date", nullable=false)
     */
    private $toDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="work_days", type="integer", nullable=false)
     */
    private $workDays;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=false)
     */
    private $notes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="leave_status", type="boolean", nullable=false)
     */
    private $leaveStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyleavetype
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyleavetype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leave_type", referencedColumnName="id")
     * })
     */
    private $leaveType;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee", referencedColumnName="id")
     * })
     */
    private $employee;



    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     * @return HrmEmployeeleaverequest
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;
    
        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime 
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime $toDate
     * @return HrmEmployeeleaverequest
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;
    
        return $this;
    }

    /**
     * Get toDate
     *
     * @return \DateTime 
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set workDays
     *
     * @param integer $workDays
     * @return HrmEmployeeleaverequest
     */
    public function setWorkDays($workDays)
    {
        $this->workDays = $workDays;
    
        return $this;
    }

    /**
     * Get workDays
     *
     * @return integer 
     */
    public function getWorkDays()
    {
        return $this->workDays;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return HrmEmployeeleaverequest
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
     * Set leaveStatus
     *
     * @param boolean $leaveStatus
     * @return HrmEmployeeleaverequest
     */
    public function setLeaveStatus($leaveStatus)
    {
        $this->leaveStatus = $leaveStatus;
    
        return $this;
    }

    /**
     * Get leaveStatus
     *
     * @return boolean 
     */
    public function getLeaveStatus()
    {
        return $this->leaveStatus;
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
     * Set leaveType
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyleavetype $leaveType
     * @return HrmEmployeeleaverequest
     */
    public function setLeaveType(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyleavetype $leaveType = null)
    {
        $this->leaveType = $leaveType;
    
        return $this;
    }

    /**
     * Get leaveType
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyleavetype 
     */
    public function getLeaveType()
    {
        return $this->leaveType;
    }

    /**
     * Set employee
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee $employee
     * @return HrmEmployeeleaverequest
     */
    public function setEmployee(\Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee $employee = null)
    {
        $this->employee = $employee;
    
        return $this;
    }

    /**
     * Get employee
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee 
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}