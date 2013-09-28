<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompany
 *
 * @ORM\Table(name="hrm_company")
 * @ORM\Entity
 */
class HrmCompany
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_company", type="integer", nullable=false)
     */
    private $idCompany;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_admin", type="integer", nullable=false)
     */
    private $idAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="text", nullable=false)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="company_info", type="text", nullable=true)
     */
    private $companyInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="displayname", type="string", length=50, nullable=false)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=100, nullable=false)
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="re_password", type="string", length=30, nullable=false)
     */
    private $rePassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="role", type="integer", nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_id", type="string", length=100, nullable=false)
     */
    private $taxId;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_id", type="string", length=255, nullable=false)
     */
    private $twitterId;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=false)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin_id", type="string", length=255, nullable=false)
     */
    private $linkedinId;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=100, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=3, nullable=false)
     */
    private $currency;

    /**
     * @var float
     *
     * @ORM\Column(name="timezone", type="float", nullable=false)
     */
    private $timezone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_date", type="datetime", nullable=false)
     */
    private $addDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=false)
     */
    private $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isactive", type="boolean", nullable=false)
     */
    private $isactive;

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
     * Set idCompany
     *
     * @param integer $idCompany
     * @return HrmCompany
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
    
        return $this;
    }

    /**
     * Get idCompany
     *
     * @return integer 
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * Set idAdmin
     *
     * @param integer $idAdmin
     * @return HrmCompany
     */
    public function setIdAdmin($idAdmin)
    {
        $this->idAdmin = $idAdmin;
    
        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return integer 
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return HrmCompany
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyInfo
     *
     * @param string $companyInfo
     * @return HrmCompany
     */
    public function setCompanyInfo($companyInfo)
    {
        $this->companyInfo = $companyInfo;
    
        return $this;
    }

    /**
     * Get companyInfo
     *
     * @return string 
     */
    public function getCompanyInfo()
    {
        return $this->companyInfo;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     * @return HrmCompany
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;
    
        return $this;
    }

    /**
     * Get displayname
     *
     * @return string 
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set emailId
     *
     * @param string $emailId
     * @return HrmCompany
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
    
        return $this;
    }

    /**
     * Get emailId
     *
     * @return string 
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return HrmCompany
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
     * Set rePassword
     *
     * @param string $rePassword
     * @return HrmCompany
     */
    public function setRePassword($rePassword)
    {
        $this->rePassword = $rePassword;
    
        return $this;
    }

    /**
     * Get rePassword
     *
     * @return string 
     */
    public function getRePassword()
    {
        return $this->rePassword;
    }

    /**
     * Set role
     *
     * @param integer $role
     * @return HrmCompany
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return HrmCompany
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
     * Set taxId
     *
     * @param string $taxId
     * @return HrmCompany
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
    
        return $this;
    }

    /**
     * Get taxId
     *
     * @return string 
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Set twitterId
     *
     * @param string $twitterId
     * @return HrmCompany
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;
    
        return $this;
    }

    /**
     * Get twitterId
     *
     * @return string 
     */
    public function getTwitterId()
    {
        return $this->twitterId;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return HrmCompany
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
    
        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set linkedinId
     *
     * @param string $linkedinId
     * @return HrmCompany
     */
    public function setLinkedinId($linkedinId)
    {
        $this->linkedinId = $linkedinId;
    
        return $this;
    }

    /**
     * Get linkedinId
     *
     * @return string 
     */
    public function getLinkedinId()
    {
        return $this->linkedinId;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return HrmCompany
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return HrmCompany
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return HrmCompany
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
     * Set timezone
     *
     * @param float $timezone
     * @return HrmCompany
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    
        return $this;
    }

    /**
     * Get timezone
     *
     * @return float 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return HrmCompany
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
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return HrmCompany
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
     * Set isactive
     *
     * @param boolean $isactive
     * @return HrmCompany
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;
    
        return $this;
    }

    /**
     * Get isactive
     *
     * @return boolean 
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return HrmCompany
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
}