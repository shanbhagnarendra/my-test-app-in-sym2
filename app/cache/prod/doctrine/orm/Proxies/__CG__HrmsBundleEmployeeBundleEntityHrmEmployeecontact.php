<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmEmployeecontact extends \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployeecontact implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setSurname($surname)
    {
        $this->__load();
        return parent::setSurname($surname);
    }

    public function getSurname()
    {
        $this->__load();
        return parent::getSurname();
    }

    public function setRelation($relation)
    {
        $this->__load();
        return parent::setRelation($relation);
    }

    public function getRelation()
    {
        $this->__load();
        return parent::getRelation();
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

    public function getIdContact()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idContact"];
        }
        $this->__load();
        return parent::getIdContact();
    }

    public function setIdEmployee(\Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee $idEmployee = NULL)
    {
        $this->__load();
        return parent::setIdEmployee($idEmployee);
    }

    public function getIdEmployee()
    {
        $this->__load();
        return parent::getIdEmployee();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'surname', 'relation', 'address', 'city', 'state', 'zipcode', 'country', 'mobilePhone', 'workPhone', 'homePhone', 'addDate', 'ip', 'idContact', 'idEmployee');
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