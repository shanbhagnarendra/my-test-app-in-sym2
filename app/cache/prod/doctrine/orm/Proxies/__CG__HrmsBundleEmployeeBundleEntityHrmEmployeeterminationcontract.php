<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmEmployeeterminationcontract extends \Hrms\Bundle\EmployeeBundle\Entity\HrmEmployeeterminationcontract implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setTerminateDate($terminateDate)
    {
        $this->__load();
        return parent::setTerminateDate($terminateDate);
    }

    public function getTerminateDate()
    {
        $this->__load();
        return parent::getTerminateDate();
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

    public function getIdTerminate()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idTerminate"];
        }
        $this->__load();
        return parent::getIdTerminate();
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
        return array('__isInitialized__', 'terminateDate', 'reason', 'eligibility', 'addDate', 'ip', 'idTerminate', 'idEmployee');
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