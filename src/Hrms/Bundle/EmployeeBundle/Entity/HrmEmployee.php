<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmEmployee
 *
 * @ORM\Table(name="hrm_employee")
 * @ORM\Entity
 */
class HrmEmployee
{
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="middlename", type="string", length=50, nullable=true)
     */
    private $middlename;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date", nullable=true)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="ssn_no", type="string", length=50, nullable=true)
     */
    private $ssnNo;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=20, nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="home_phone", type="string", length=20, nullable=true)
     */
    private $homePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="work_phone", type="string", length=20, nullable=true)
     */
    private $workPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_phone", type="string", length=20, nullable=true)
     */
    private $mobilePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=255, nullable=true)
     */
    private $cv;

    /**
     * @var string
     *
     * @ORM\Column(name="work_email", type="string", length=100, nullable=true)
     */
    private $workEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="other_email", type="string", length=100, nullable=true)
     */
    private $otherEmail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emp_status", type="boolean", nullable=true)
     */
    private $empStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="joined_date", type="date", nullable=false)
     */
    private $joinedDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="marital_status", type="boolean", nullable=true)
     */
    private $maritalStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="text", nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="random_num", type="string", length=255, nullable=true)
     */
    private $randomNum;

    /**
     * @var string
     *
     * @ORM\Column(name="dl_no", type="string", length=100, nullable=true)
     */
    private $dlNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=false)
     */
    private $lastLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modify_date", type="datetime", nullable=false)
     */
    private $modifyDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="view_date", type="datetime", nullable=true)
     */
    private $viewDate;

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
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyteam
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyteam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team", referencedColumnName="id")
     * })
     */
    private $team;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyjobtitle
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyjobtitle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_title", referencedColumnName="id")
     * })
     */
    private $jobTitle;

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
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="department", referencedColumnName="id")
     * })
     */
    private $department;

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
     * Set firstname
     *
     * @param string $firstname
     * @return HrmEmployee
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     * @return HrmEmployee
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    
        return $this;
    }

    /**
     * Get middlename
     *
     * @return string 
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return HrmEmployee
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return HrmEmployee
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    
        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return HrmEmployee
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    
        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return HrmEmployee
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set ssnNo
     *
     * @param string $ssnNo
     * @return HrmEmployee
     */
    public function setSsnNo($ssnNo)
    {
        $this->ssnNo = $ssnNo;
    
        return $this;
    }

    /**
     * Get ssnNo
     *
     * @return string 
     */
    public function getSsnNo()
    {
        return $this->ssnNo;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return HrmEmployee
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
     * Set city
     *
     * @param string $city
     * @return HrmEmployee
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return HrmEmployee
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return HrmEmployee
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return HrmEmployee
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
     * Set homePhone
     *
     * @param string $homePhone
     * @return HrmEmployee
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
     * Set workPhone
     *
     * @param string $workPhone
     * @return HrmEmployee
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
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return HrmEmployee
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
     * Set cv
     *
     * @param string $cv
     * @return HrmEmployee
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    
        return $this;
    }

    /**
     * Get cv
     *
     * @return string 
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set workEmail
     *
     * @param string $workEmail
     * @return HrmEmployee
     */
    public function setWorkEmail($workEmail)
    {
        $this->workEmail = $workEmail;
    
        return $this;
    }

    /**
     * Get workEmail
     *
     * @return string 
     */
    public function getWorkEmail()
    {
        return $this->workEmail;
    }

    /**
     * Set otherEmail
     *
     * @param string $otherEmail
     * @return HrmEmployee
     */
    public function setOtherEmail($otherEmail)
    {
        $this->otherEmail = $otherEmail;
    
        return $this;
    }

    /**
     * Get otherEmail
     *
     * @return string 
     */
    public function getOtherEmail()
    {
        return $this->otherEmail;
    }

    /**
     * Set empStatus
     *
     * @param boolean $empStatus
     * @return HrmEmployee
     */
    public function setEmpStatus($empStatus)
    {
        $this->empStatus = $empStatus;
    
        return $this;
    }

    /**
     * Get empStatus
     *
     * @return boolean 
     */
    public function getEmpStatus()
    {
        return $this->empStatus;
    }

    /**
     * Set joinedDate
     *
     * @param \DateTime $joinedDate
     * @return HrmEmployee
     */
    public function setJoinedDate($joinedDate)
    {
        $this->joinedDate = $joinedDate;
    
        return $this;
    }

    /**
     * Get joinedDate
     *
     * @return \DateTime 
     */
    public function getJoinedDate()
    {
        return $this->joinedDate;
    }

    /**
     * Set maritalStatus
     *
     * @param boolean $maritalStatus
     * @return HrmEmployee
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
    
        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return boolean 
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return HrmEmployee
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return HrmEmployee
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return HrmEmployee
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set randomNum
     *
     * @param string $randomNum
     * @return HrmEmployee
     */
    public function setRandomNum($randomNum)
    {
        $this->randomNum = $randomNum;
    
        return $this;
    }

    /**
     * Get randomNum
     *
     * @return string 
     */
    public function getRandomNum()
    {
        return $this->randomNum;
    }

    /**
     * Set dlNo
     *
     * @param string $dlNo
     * @return HrmEmployee
     */
    public function setDlNo($dlNo)
    {
        $this->dlNo = $dlNo;
    
        return $this;
    }

    /**
     * Get dlNo
     *
     * @return string 
     */
    public function getDlNo()
    {
        return $this->dlNo;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return HrmEmployee
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    
        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set modifyDate
     *
     * @param \DateTime $modifyDate
     * @return HrmEmployee
     */
    public function setModifyDate($modifyDate)
    {
        $this->modifyDate = $modifyDate;
    
        return $this;
    }

    /**
     * Get modifyDate
     *
     * @return \DateTime 
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * Set viewDate
     *
     * @param \DateTime $viewDate
     * @return HrmEmployee
     */
    public function setViewDate($viewDate)
    {
        $this->viewDate = $viewDate;
    
        return $this;
    }

    /**
     * Get viewDate
     *
     * @return \DateTime 
     */
    public function getViewDate()
    {
        return $this->viewDate;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return HrmEmployee
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
     * @return HrmEmployee
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
     * Set team
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyteam $team
     * @return HrmEmployee
     */
    public function setTeam(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyteam $team = null)
    {
        $this->team = $team;
    
        return $this;
    }

    /**
     * Get team
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyteam 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set jobTitle
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyjobtitle $jobTitle
     * @return HrmEmployee
     */
    public function setJobTitle(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyjobtitle $jobTitle = null)
    {
        $this->jobTitle = $jobTitle;
    
        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyjobtitle 
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set division
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydivision $division
     * @return HrmEmployee
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

    /**
     * Set department
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment $department
     * @return HrmEmployee
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

    /**
     * Set company
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company
     * @return HrmEmployee
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