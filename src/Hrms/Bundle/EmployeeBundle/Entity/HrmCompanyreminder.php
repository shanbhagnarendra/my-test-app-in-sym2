<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompanyreminder
 *
 * @ORM\Table(name="hrm_companyreminder")
 * @ORM\Entity
 */
class HrmCompanyreminder
{
    /**
     * @var string
     *
     * @ORM\Column(name="reminder", type="text", nullable=false)
     */
    private $reminder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reminder_date", type="datetime", nullable=false)
     */
    private $reminderDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recurrence_status", type="boolean", nullable=false)
     */
    private $recurrenceStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_date", type="datetime", nullable=false)
     */
    private $addDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_reminder", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReminder;

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
     * Set reminder
     *
     * @param string $reminder
     * @return HrmCompanyreminder
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;
    
        return $this;
    }

    /**
     * Get reminder
     *
     * @return string 
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * Set reminderDate
     *
     * @param \DateTime $reminderDate
     * @return HrmCompanyreminder
     */
    public function setReminderDate($reminderDate)
    {
        $this->reminderDate = $reminderDate;
    
        return $this;
    }

    /**
     * Get reminderDate
     *
     * @return \DateTime 
     */
    public function getReminderDate()
    {
        return $this->reminderDate;
    }

    /**
     * Set recurrenceStatus
     *
     * @param boolean $recurrenceStatus
     * @return HrmCompanyreminder
     */
    public function setRecurrenceStatus($recurrenceStatus)
    {
        $this->recurrenceStatus = $recurrenceStatus;
    
        return $this;
    }

    /**
     * Get recurrenceStatus
     *
     * @return boolean 
     */
    public function getRecurrenceStatus()
    {
        return $this->recurrenceStatus;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return HrmCompanyreminder
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return HrmCompanyreminder
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
     * Get idReminder
     *
     * @return integer 
     */
    public function getIdReminder()
    {
        return $this->idReminder;
    }

    /**
     * Set company
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company
     * @return HrmCompanyreminder
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