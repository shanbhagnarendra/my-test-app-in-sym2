<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmEmployeeterminationcontract
 *
 * @ORM\Table(name="hrm__employeeterminationcontract")
 * @ORM\Entity
 */
class HrmEmployeeterminationcontract
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="terminate_date", type="date", nullable=false)
     */
    private $terminateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text", nullable=false)
     */
    private $reason;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * Set terminateDate
     *
     * @param \DateTime $terminateDate
     * @return HrmEmployeeterminationcontract
     */
    public function setTerminateDate($terminateDate)
    {
        $this->terminateDate = $terminateDate;
    
        return $this;
    }

    /**
     * Get terminateDate
     *
     * @return \DateTime 
     */
    public function getTerminateDate()
    {
        return $this->terminateDate;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return HrmEmployeeterminationcontract
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    
        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
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
     * Set employee
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee $employee
     * @return HrmEmployeeterminationcontract
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