<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmPropertytype extends \Hrms\Bundle\EmployeeBundle\Entity\HrmPropertytype implements \Doctrine\ORM\Proxy\Proxy
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

    public function setTypeName($typeName)
    {
        $this->__load();
        return parent::setTypeName($typeName);
    }

    public function getTypeName()
    {
        $this->__load();
        return parent::getTypeName();
    }

    public function setTypeDescription($typeDescription)
    {
        $this->__load();
        return parent::setTypeDescription($typeDescription);
    }

    public function getTypeDescription()
    {
        $this->__load();
        return parent::getTypeDescription();
    }

    public function getIdPropertyType()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idPropertyType"];
        }
        $this->__load();
        return parent::getIdPropertyType();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idCompany', 'typeName', 'typeDescription', 'idPropertyType');
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