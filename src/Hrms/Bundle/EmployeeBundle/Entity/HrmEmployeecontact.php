<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmEmployeecontact
 *
 * @ORM\Table(name="hrm_employeecontact")
 * @ORM\Entity
 */
class HrmEmployeecontact
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=50, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="relation", type="string", length=50, nullable=true)
     */
    private $relation;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=20, nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_phone", type="string", length=20, nullable=true)
     */
    private $mobilePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="work_phone", type="string", length=20, nullable=true)
     */
    private $workPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="home_phone", type="string", length=20, nullable=true)
     */
    private $homePhone;

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
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCountry
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmState
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmState")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state", referencedColumnName="id")
     * })
     */
    private $state;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCity
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city", referencedColumnName="id")
     * })
     */
    private $city;

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
     * Set name
     *
     * @param string $name
     * @return HrmEmployeecontact
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return HrmEmployeecontact
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set relation
     *
     * @param string $relation
     * @return HrmEmployeecontact
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
    
        return $this;
    }

    /**
     * Get relation
     *
     * @return string 
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return HrmEmployeecontact
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return HrmEmployeecontact
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    
        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return HrmEmployeecontact
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    
        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string 
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set workPhone
     *
     * @param string $workPhone
     * @return HrmEmployeecontact
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;
    
        return $this;
    }

    /**
     * Get workPhone
     *
     * @return string 
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * Set homePhone
     *
     * @param string $homePhone
     * @return HrmEmployeecontact
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;
    
        return $this;
    }

    /**
     * Get homePhone
     *
     * @return string 
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return HrmEmployeecontact
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
     * @return HrmEmployeecontact
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
     * Set country
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCountry $country
     * @return HrmEmployeecontact
     */
    public function setCountry(\Hrms\Bundle\EmployeeBundle\Entity\HrmCountry $country = null)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCountry 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set state
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmState $state
     * @return HrmEmployeecontact
     */
    public function setState(\Hrms\Bundle\EmployeeBundle\Entity\HrmState $state = null)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmState 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set city
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCity $city
     * @return HrmEmployeecontact
     */
    public function setCity(\Hrms\Bundle\EmployeeBundle\Entity\HrmCity $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCity 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set employee
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee $employee
     * @return HrmEmployeecontact
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