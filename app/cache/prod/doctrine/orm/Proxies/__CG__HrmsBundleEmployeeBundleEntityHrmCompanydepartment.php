<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmCompanydepartment extends \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydepartment implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setDeptName($deptName)
    {
        $this->__load();
        return parent::setDeptName($deptName);
    }

    public function getDeptName()
    {
        $this->__load();
        return parent::getDeptName();
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

    public function getIdDepartment()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idDepartment"];
        }
        $this->__load();
        return parent::getIdDepartment();
    }

    public function setIdDivision(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanydivision $idDivision = NULL)
    {
        $this->__load();
        return parent::setIdDivision($idDivision);
    }

    public function getIdDivision()
    {
        $this->__load();
        return parent::getIdDivision();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'deptName', 'notes', 'idDepartment', 'idDivision');
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