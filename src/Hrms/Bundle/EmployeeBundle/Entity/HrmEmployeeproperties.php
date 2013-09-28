<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmEmployeeproperties
 *
 * @ORM\Table(name="hrm_employeeproperties")
 * @ORM\Entity
 */
class HrmEmployeeproperties
{
    /**
     * @var string
     *
     * @ORM\Column(name="property_name", type="string", length=255, nullable=true)
     */
    private $propertyName;

    /**
     * @var string
     *
     * @ORM\Column(name="serial_no", type="string", length=255, nullable=true)
     */
    private $serialNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_of_items", type="integer", nullable=true)
     */
    private $noOfItems;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

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
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmPropertytype
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmPropertytype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_type", referencedColumnName="id")
     * })
     */
    private $propertyType;

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
     * Set propertyName
     *
     * @param string $propertyName
     * @return HrmEmployeeproperties
     */
    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;
    
        return $this;
    }

    /**
     * Get propertyName
     *
     * @return string 
     */
    public function getPropertyName()
    {
        return $this->propertyName;
    }

    /**
     * Set serialNo
     *
     * @param string $serialNo
     * @return HrmEmployeeproperties
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
    
        return $this;
    }

    /**
     * Get serialNo
     *
     * @return string 
     */
    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * Set noOfItems
     *
     * @param integer $noOfItems
     * @return HrmEmployeeproperties
     */
    public function setNoOfItems($noOfItems)
    {
        $this->noOfItems = $noOfItems;
    
        return $this;
    }

    /**
     * Get noOfItems
     *
     * @return integer 
     */
    public function getNoOfItems()
    {
        return $this->noOfItems;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return HrmEmployeeproperties
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
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return HrmEmployeeproperties
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
     * @return HrmEmployeeproperties
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
     * Set propertyType
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmPropertytype $propertyType
     * @return HrmEmployeeproperties
     */
    public function setPropertyType(\Hrms\Bundle\EmployeeBundle\Entity\HrmPropertytype $propertyType = null)
    {
        $this->propertyType = $propertyType;
    
        return $this;
    }

    /**
     * Get propertyType
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmPropertytype 
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set employee
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee $employee
     * @return HrmEmployeeproperties
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