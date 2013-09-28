<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmCompanyjobtitle extends \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyjobtitle implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setJobTitleName($jobTitleName)
    {
        $this->__load();
        return parent::setJobTitleName($jobTitleName);
    }

    public function getJobTitleName()
    {
        $this->__load();
        return parent::getJobTitleName();
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

    public function getIdJobTitle()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idJobTitle"];
        }
        $this->__load();
        return parent::getIdJobTitle();
    }

    public function setIdTeam(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyteam $idTeam = NULL)
    {
        $this->__load();
        return parent::setIdTeam($idTeam);
    }

    public function getIdTeam()
    {
        $this->__load();
        return parent::getIdTeam();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'jobTitleName', 'notes', 'idJobTitle', 'idTeam');
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