<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompanynotification
 *
 * @ORM\Table(name="hrm_companynotification")
 * @ORM\Entity
 */
class HrmCompanynotification
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="birthday", type="boolean", nullable=true)
     */
    private $birthday;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contract_end", type="boolean", nullable=true)
     */
    private $contractEnd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notification_status", type="boolean", nullable=true)
     */
    private $notificationStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emp_add", type="boolean", nullable=true)
     */
    private $empAdd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emp_modify", type="boolean", nullable=true)
     */
    private $empModify;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emp_remove", type="boolean", nullable=true)
     */
    private $empRemove;

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
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee", referencedColumnName="id")
     * })
     */
    private $employee;

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
     * Set birthday
     *
     * @param boolean $birthday
     * @return HrmCompanynotification
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return boolean 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set contractEnd
     *
     * @param boolean $contractEnd
     * @return HrmCompanynotification
     */
    public function setContractEnd($contractEnd)
    {
        $this->contractEnd = $contractEnd;
    
        return $this;
    }

    /**
     * Get contractEnd
     *
     * @return boolean 
     */
    public function getContractEnd()
    {
        return $this->contractEnd;
    }

    /**
     * Set notificationStatus
     *
     * @param boolean $notificationStatus
     * @return HrmCompanynotification
     */
    public function setNotificationStatus($notificationStatus)
    {
        $this->notificationStatus = $notificationStatus;
    
        return $this;
    }

    /**
     * Get notificationStatus
     *
     * @return boolean 
     */
    public function getNotificationStatus()
    {
        return $this->notificationStatus;
    }

    /**
     * Set empAdd
     *
     * @param boolean $empAdd
     * @return HrmCompanynotification
     */
    public function setEmpAdd($empAdd)
    {
        $this->empAdd = $empAdd;
    
        return $this;
    }

    /**
     * Get empAdd
     *
     * @return boolean 
     */
    public function getEmpAdd()
    {
        return $this->empAdd;
    }

    /**
     * Set empModify
     *
     * @param boolean $empModify
     * @return HrmCompanynotification
     */
    public function setEmpModify($empModify)
    {
        $this->empModify = $empModify;
    
        return $this;
    }

    /**
     * Get empModify
     *
     * @return boolean 
     */
    public function getEmpModify()
    {
        return $this->empModify;
    }

    /**
     * Set empRemove
     *
     * @param boolean $empRemove
     * @return HrmCompanynotification
     */
    public function setEmpRemove($empRemove)
    {
        $this->empRemove = $empRemove;
    
        return $this;
    }

    /**
     * Get empRemove
     *
     * @return boolean 
     */
    public function getEmpRemove()
    {
        return $this->empRemove;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return HrmCompanynotification
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
     * Set employee
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee $employee
     * @return HrmCompanynotification
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

    /**
     * Set company
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company
     * @return HrmCompanynotification
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