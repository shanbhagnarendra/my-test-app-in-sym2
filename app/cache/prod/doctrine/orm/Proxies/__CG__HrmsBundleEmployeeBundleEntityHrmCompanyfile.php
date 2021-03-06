<?php

namespace Proxies\__CG__\Hrms\Bundle\EmployeeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HrmCompanyfile extends \Hrms\Bundle\EmployeeBundle\Entity\HrmCompanyfile implements \Doctrine\ORM\Proxy\Proxy
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

    public function setIdFolder($idFolder)
    {
        $this->__load();
        return parent::setIdFolder($idFolder);
    }

    public function getIdFolder()
    {
        $this->__load();
        return parent::getIdFolder();
    }

    public function setFilename($filename)
    {
        $this->__load();
        return parent::setFilename($filename);
    }

    public function getFilename()
    {
        $this->__load();
        return parent::getFilename();
    }

    public function setFilesize($filesize)
    {
        $this->__load();
        return parent::setFilesize($filesize);
    }

    public function getFilesize()
    {
        $this->__load();
        return parent::getFilesize();
    }

    public function setFileExtType($fileExtType)
    {
        $this->__load();
        return parent::setFileExtType($fileExtType);
    }

    public function getFileExtType()
    {
        $this->__load();
        return parent::getFileExtType();
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

    public function getIdFile()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idFile"];
        }
        $this->__load();
        return parent::getIdFile();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idCompany', 'idFolder', 'filename', 'filesize', 'fileExtType', 'addDate', 'idFile');
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