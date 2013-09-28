<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmEmployeebenefits extends \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployeebenefits implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setIdBenefits($idBenefits)
    {
        $this->__load();
        return parent::setIdBenefits($idBenefits);
    }

    public function getIdBenefits()
    {
        $this->__load();
        return parent::getIdBenefits();
    }

    public function setEligibility($eligibility)
    {
        $this->__load();
        return parent::setEligibility($eligibility);
    }

    public function getEligibility()
    {
        $this->__load();
        return parent::getEligibility();
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

    public function setCoverage($coverage)
    {
        $this->__load();
        return parent::setCoverage($coverage);
    }

    public function getCoverage()
    {
        $this->__load();
        return parent::getCoverage();
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

    public function getIdEmpBenefits()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idEmpBenefits"];
        }
        $this->__load();
        return parent::getIdEmpBenefits();
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
        return array('__isInitialized__', 'idBenefits', 'eligibility', 'fromDate', 'toDate', 'notes', 'coverage', 'addDate', 'idEmpBenefits', 'idEmployee');
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