<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmEmployeesalary extends \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployeesalary implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setPreviousSalary($previousSalary)
    {
        $this->__load();
        return parent::setPreviousSalary($previousSalary);
    }

    public function getPreviousSalary()
    {
        $this->__load();
        return parent::getPreviousSalary();
    }

    public function setCurrentSalary($currentSalary)
    {
        $this->__load();
        return parent::setCurrentSalary($currentSalary);
    }

    public function getCurrentSalary()
    {
        $this->__load();
        return parent::getCurrentSalary();
    }

    public function setCurrency($currency)
    {
        $this->__load();
        return parent::setCurrency($currency);
    }

    public function getCurrency()
    {
        $this->__load();
        return parent::getCurrency();
    }

    public function setReason($reason)
    {
        $this->__load();
        return parent::setReason($reason);
    }

    public function getReason()
    {
        $this->__load();
        return parent::getReason();
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

    public function setEmployee(\Hrms\Bundle\EmployeeBundle\Entity\HrmEmployee $employee = NULL)
    {
        $this->__load();
        return parent::setEmployee($employee);
    }

    public function getEmployee()
    {
        $this->__load();
        return parent::getEmployee();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'previousSalary', 'currentSalary', 'currency', 'reason', 'addDate', 'ip', 'id', 'employee');
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