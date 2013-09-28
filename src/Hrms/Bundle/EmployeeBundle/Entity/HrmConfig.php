<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmConfig
 *
 * @ORM\Table(name="hrm_config")
 * @ORM\Entity
 */
class HrmConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ckey", type="string", length=100, nullable=false)
     */
    private $ckey;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="f_type", type="string", length=20, nullable=false)
     */
    private $fType;

    /**
     * @var string
     *
     * @ORM\Column(name="f_key", type="text", nullable=true)
     */
    private $fKey;

    /**
     * @var string
     *
     * @ORM\Column(name="f_value", type="text", nullable=true)
     */
    private $fValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_editable", type="boolean", nullable=false)
     */
    private $isEditable;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_seq", type="integer", nullable=true)
     */
    private $idSeq;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     * @return HrmConfig
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ckey
     *
     * @param string $ckey
     * @return HrmConfig
     */
    public function setCkey($ckey)
    {
        $this->ckey = $ckey;
    
        return $this;
    }

    /**
     * Get ckey
     *
     * @return string 
     */
    public function getCkey()
    {
        return $this->ckey;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return HrmConfig
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set fType
     *
     * @param string $fType
     * @return HrmConfig
     */
    public function setFType($fType)
    {
        $this->fType = $fType;
    
        return $this;
    }

    /**
     * Get fType
     *
     * @return string 
     */
    public function getFType()
    {
        return $this->fType;
    }

    /**
     * Set fKey
     *
     * @param string $fKey
     * @return HrmConfig
     */
    public function setFKey($fKey)
    {
        $this->fKey = $fKey;
    
        return $this;
    }

    /**
     * Get fKey
     *
     * @return string 
     */
    public function getFKey()
    {
        return $this->fKey;
    }

    /**
     * Set fValue
     *
     * @param string $fValue
     * @return HrmConfig
     */
    public function setFValue($fValue)
    {
        $this->fValue = $fValue;
    
        return $this;
    }

    /**
     * Get fValue
     *
     * @return string 
     */
    public function getFValue()
    {
        return $this->fValue;
    }

    /**
     * Set isEditable
     *
     * @param boolean $isEditable
     * @return HrmConfig
     */
    public function setIsEditable($isEditable)
    {
        $this->isEditable = $isEditable;
    
        return $this;
    }

    /**
     * Get isEditable
     *
     * @return boolean 
     */
    public function getIsEditable()
    {
        return $this->isEditable;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return HrmConfig
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set idSeq
     *
     * @param integer $idSeq
     * @return HrmConfig
     */
    public function setIdSeq($idSeq)
    {
        $this->idSeq = $idSeq;
    
        return $this;
    }

    /**
     * Get idSeq
     *
     * @return integer 
     */
    public function getIdSeq()
    {
        return $this->idSeq;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}