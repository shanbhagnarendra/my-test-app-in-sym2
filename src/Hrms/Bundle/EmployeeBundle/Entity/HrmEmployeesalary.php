<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmEmployeesalary
 *
 * @ORM\Table(name="hrm_employeesalary")
 * @ORM\Entity
 */
class HrmEmployeesalary
{
    /**
     * @var float
     *
     * @ORM\Column(name="previous_salary", type="float", nullable=true)
     */
    private $previousSalary;

    /**
     * @var float
     *
     * @ORM\Column(name="current_salary", type="float", nullable=true)
     */
    private $currentSalary;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=50, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text", nullable=true)
     */
    private $reason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_date", type="datetime", nullable=false)
     */
    private $addDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip;

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
     * Set previousSalary
     *
     * @param float $previousSalary
     * @return HrmEmployeesalary
     */
    public function setPreviousSalary($previousSalary)
    {
        $this->previousSalary = $previousSalary;
    
        return $this;
    }

    /**
     * Get previousSalary
     *
     * @return float 
     */
    public function getPreviousSalary()
    {
        return $this->previousSalary;
    }

    /**
     * Set currentSalary
     *
     * @param float $currentSalary
     * @return HrmEmployeesalary
     */
    public function setCurrentSalary($currentSalary)
    {
        $this->currentSalary = $currentSalary;
    
        return $this;
    }

    /**
     * Get currentSalary
     *
     * @return float 
     */
    public function getCurrentSalary()
    {
        return $this->currentSalary;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return HrmEmployeesalary
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    
        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return HrmEmployeesalary
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
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return HrmEmployeesalary
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
     * Set ip
     *
     * @param string $ip
     * @return HrmEmployeesalary
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
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
     * @return HrmEmployeesalary
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