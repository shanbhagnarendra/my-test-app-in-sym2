<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmEmployeeleaverequest extends \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployeeleaverequest implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setIdCompany($idCompany)
    {
        $this->__load();
        return parent::setIdCompany($idCompany);
    }

    public function getIdCompany()
    {
        $this->__load();
        return parent::getIdCompany();
    }

    public function setLeaveType($leaveType)
    {
        $this->__load();
        return parent::setLeaveType($leaveType);
    }

    public function getLeaveType()
    {
        $this->__load();
        return parent::getLeaveType();
    }

    public function setFromDate($fromDate)
    {
        $this->__load();
        return parent::setFromDate($fromDate);
    }

    public function getFromDate()
    {
        $this->__load();
        return parent::getFromDate();
    }

    public function setToDate($toDate)
    {
        $this->__load();
        return parent::setToDate($toDate);
    }

    public function getToDate()
    {
        $this->__load();
        return parent::getToDate();
    }

    public function setWorkDays($workDays)
    {
        $this->__load();
        return parent::setWorkDays($workDays);
    }

    public function getWorkDays()
    {
        $this->__load();
        return parent::getWorkDays();
    }

    public function setNotes($notes)
    {
        $this->__load();
        return parent::setNotes($notes);
    }

    public function getNotes()
    {
        $this->__load();
        return parent::getNotes();
    }

    public function setLeaveStatus($leaveStatus)
    {
        $this->__load();
        return parent::setLeaveStatus($leaveStatus);
    }

    public function getLeaveStatus()
    {
        $this->__load();
        return parent::getLeaveStatus();
    }

    public function getIdLeaveReq()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idLeaveReq"];
        }
        $this->__load();
        return parent::getIdLeaveReq();
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
        return array('__isInitialized__', 'idCompany', 'leaveType', 'fromDate', 'toDate', 'workDays', 'notes', 'leaveStatus', 'idLeaveReq', 'idEmployee');
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