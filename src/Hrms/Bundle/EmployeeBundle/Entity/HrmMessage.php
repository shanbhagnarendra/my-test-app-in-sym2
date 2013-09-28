<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmMessage
 *
 * @ORM\Table(name="hrm_message")
 * @ORM\Entity
 */
class HrmMessage
{
    /**
     * @var string
     *
     * @ORM\Column(name="lang_code", type="string", length=50, nullable=false)
     */
    private $langCode;

    /**
     * @var string
     *
     * @ORM\Column(name="key_name", type="string", length=50, nullable=false)
     */
    private $keyName;

    /**
     * @var string
     *
     * @ORM\Column(name="key_value", type="string", length=200, nullable=false)
     */
    private $keyValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set langCode
     *
     * @param string $langCode
     * @return HrmMessage
     */
    public function setLangCode($langCode)
    {
        $this->langCode = $langCode;
    
        return $this;
    }

    /**
     * Get langCode
     *
     * @return string 
     */
    public function getLangCode()
    {
        return $this->langCode;
    }

    /**
     * Set keyName
     *
     * @param string $keyName
     * @return HrmMessage
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;
    
        return $this;
    }

    /**
     * Get keyName
     *
     * @return string 
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Set keyValue
     *
     * @param string $keyValue
     * @return HrmMessage
     */
    public function setKeyValue($keyValue)
    {
        $this->keyValue = $keyValue;
    
        return $this;
    }

    /**
     * Get keyValue
     *
     * @return string 
     */
    public function getKeyValue()
    {
        return $this->keyValue;
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