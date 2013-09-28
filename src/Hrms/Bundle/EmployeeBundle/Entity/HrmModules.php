<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmModules
 *
 * @ORM\Table(name="hrm_modules")
 * @ORM\Entity
 */
class HrmModules
{
    /**
     * @var string
     *
     * @ORM\Column(name="module_name", type="string", length=50, nullable=false)
     */
    private $moduleName;

    /**
     * @var string
     *
     * @ORM\Column(name="module_value", type="string", length=50, nullable=false)
     */
    private $moduleValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isactive", type="boolean", nullable=false)
     */
    private $isactive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date", nullable=false)
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderby", type="integer", nullable=false)
     */
    private $orderby;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set moduleName
     *
     * @param string $moduleName
     * @return HrmModules
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    
        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string 
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set moduleValue
     *
     * @param string $moduleValue
     * @return HrmModules
     */
    public function setModuleValue($moduleValue)
    {
        $this->moduleValue = $moduleValue;
    
        return $this;
    }

    /**
     * Get moduleValue
     *
     * @return string 
     */
    public function getModuleValue()
    {
        return $this->moduleValue;
    }

    /**
     * Set isactive
     *
     * @param boolean $isactive
     * @return HrmModules
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;
    
        return $this;
    }

    /**
     * Get isactive
     *
     * @return boolean 
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return HrmModules
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    
        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set orderby
     *
     * @param integer $orderby
     * @return HrmModules
     */
    public function setOrderby($orderby)
    {
        $this->orderby = $orderby;
    
        return $this;
    }

    /**
     * Get orderby
     *
     * @return integer 
     */
    public function getOrderby()
    {
        return $this->orderby;
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