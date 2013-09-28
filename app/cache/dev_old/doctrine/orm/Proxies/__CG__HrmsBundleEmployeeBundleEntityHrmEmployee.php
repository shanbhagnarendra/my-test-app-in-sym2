<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmEmployee extends \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setFirstname($firstname)
    {
        $this->__load();
        return parent::setFirstname($firstname);
    }

    public function getFirstname()
    {
        $this->__load();
        return parent::getFirstname();
    }

    public function setMiddlename($middlename)
    {
        $this->__load();
        return parent::setMiddlename($middlename);
    }

    public function getMiddlename()
    {
        $this->__load();
        return parent::getMiddlename();
    }

    public function setLastname($lastname)
    {
        $this->__load();
        return parent::setLastname($lastname);
    }

    public function getLastname()
    {
        $this->__load();
        return parent::getLastname();
    }

    public function setDob($dob)
    {
        $this->__load();
        return parent::setDob($dob);
    }

    public function getDob()
    {
        $this->__load();
        return parent::getDob();
    }

    public function setNationality($nationality)
    {
        $this->__load();
        return parent::setNationality($nationality);
    }

    public function getNationality()
    {
        $this->__load();
        return parent::getNationality();
    }

    public function setGender($gender)
    {
        $this->__load();
        return parent::setGender($gender);
    }

    public function getGender()
    {
        $this->__load();
        return parent::getGender();
    }

    public function setSsnNo($ssnNo)
    {
        $this->__load();
        return parent::setSsnNo($ssnNo);
    }

    public function getSsnNo()
    {
        $this->__load();
        return parent::getSsnNo();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setCity($city)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }

    public function setState($state)
    {
        $this->__load();
        return parent::setState($state);
    }

    public function getState()
    {
        $this->__load();
        return parent::getState();
    }

    public function setCountry($country)
    {
        $this->__load();
        return parent::setCountry($country);
    }

    public function getCountry()
    {
        $this->__load();
        return parent::getCountry();
    }

    public function setZipcode($zipcode)
    {
        $this->__load();
        return parent::setZipcode($zipcode);
    }

    public function getZipcode()
    {
        $this->__load();
        return parent::getZipcode();
    }

    public function setHomePhone($homePhone)
    {
        $this->__load();
        return parent::setHomePhone($homePhone);
    }

    public function getHomePhone()
    {
        $this->__load();
        return parent::getHomePhone();
    }

    public function setWorkPhone($workPhone)
    {
        $this->__load();
        return parent::setWorkPhone($workPhone);
    }

    public function getWorkPhone()
    {
        $this->__load();
        return parent::getWorkPhone();
    }

    public function setMobilePhone($mobilePhone)
    {
        $this->__load();
        return parent::setMobilePhone($mobilePhone);
    }

    public function getMobilePhone()
    {
        $this->__load();
        return parent::getMobilePhone();
    }

    public function setCv($cv)
    {
        $this->__load();
        return parent::setCv($cv);
    }

    public function getCv()
    {
        $this->__load();
        return parent::getCv();
    }

    public function setWorkEmail($workEmail)
    {
        $this->__load();
        return parent::setWorkEmail($workEmail);
    }

    public function getWorkEmail()
    {
        $this->__load();
        return parent::getWorkEmail();
    }

    public function setOtherEmail($otherEmail)
    {
        $this->__load();
        return parent::setOtherEmail($otherEmail);
    }

    public function getOtherEmail()
    {
        $this->__load();
        return parent::getOtherEmail();
    }

    public function setEmpStatus($empStatus)
    {
        $this->__load();
        return parent::setEmpStatus($empStatus);
    }

    public function getEmpStatus()
    {
        $this->__load();
        return parent::getEmpStatus();
    }

    public function setJoinedDate($joinedDate)
    {
        $this->__load();
        return parent::setJoinedDate($joinedDate);
    }

    public function getJoinedDate()
    {
        $this->__load();
        return parent::getJoinedDate();
    }

    public function setMaritalStatus($maritalStatus)
    {
        $this->__load();
        return parent::setMaritalStatus($maritalStatus);
    }

    public function getMaritalStatus()
    {
        $this->__load();
        return parent::getMaritalStatus();
    }

    public function setAvatar($avatar)
    {
        $this->__load();
        return parent::setAvatar($avatar);
    }

    public function getAvatar()
    {
        $this->__load();
        return parent::getAvatar();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setRandomNum($randomNum)
    {
        $this->__load();
        return parent::setRandomNum($randomNum);
    }

    public function getRandomNum()
    {
        $this->__load();
        return parent::getRandomNum();
    }

    public function setDlNo($dlNo)
    {
        $this->__load();
        return parent::setDlNo($dlNo);
    }

    public function getDlNo()
    {
        $this->__load();
        return parent::getDlNo();
    }

    public function setLastLogin($lastLogin)
    {
        $this->__load();
        return parent::setLastLogin($lastLogin);
    }

    public function getLastLogin()
    {
        $this->__load();
        return parent::getLastLogin();
    }

    public function setModifyDate($modifyDate)
    {
        $this->__load();
        return parent::setModifyDate($modifyDate);
    }

    public function getModifyDate()
    {
        $this->__load();
        return parent::getModifyDate();
    }

    public function setViewDate($viewDate)
    {
        $this->__load();
        return parent::setViewDate($viewDate);
    }

    public function getViewDate()
    {
        $this->__load();
        return parent::getViewDate();
    }

    public function setAddDate($addDate)
    {
        $this->__load();
        return parent::setAddDate($addDate);
    }

    public function getAddDate()
    {
        $this->__load();
        return parent::getAddDate();
    }

    public function setIp($ip)
    {
        $this->__load();
        return parent::setIp($ip);
    }

    public function getIp()
    {
        $this->__load();
        return parent::getIp();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTeam(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyteam $team = NULL)
    {
        $this->__load();
        return parent::setTeam($team);
    }

    public function getTeam()
    {
        $this->__load();
        return parent::getTeam();
    }

    public function setJobTitle(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyjobtitle $jobTitle = NULL)
    {
        $this->__load();
        return parent::setJobTitle($jobTitle);
    }

    public function getJobTitle()
    {
        $this->__load();
        return parent::getJobTitle();
    }

    public function setDivision(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydivision $division = NULL)
    {
        $this->__load();
        return parent::setDivision($division);
    }

    public function getDivision()
    {
        $this->__load();
        return parent::getDivision();
    }

    public function setDepartment(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment $department = NULL)
    {
        $this->__load();
        return parent::setDepartment($department);
    }

    public function getDepartment()
    {
        $this->__load();
        return parent::getDepartment();
    }

    public function setCompany(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company = NULL)
    {
        $this->__load();
        return parent::setCompany($company);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'firstname', 'middlename', 'lastname', 'dob', 'nationality', 'gender', 'ssnNo', 'address', 'city', 'state', 'country', 'zipcode', 'homePhone', 'workPhone', 'mobilePhone', 'cv', 'workEmail', 'otherEmail', 'empStatus', 'joinedDate', 'maritalStatus', 'avatar', 'username', 'password', 'randomNum', 'dlNo', 'lastLogin', 'modifyDate', 'viewDate', 'addDate', 'ip', 'id', 'team', 'jobTitle', 'division', 'department', 'company');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}