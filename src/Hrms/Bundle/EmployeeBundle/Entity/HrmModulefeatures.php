<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmModulefeatures
 *
 * @ORM\Table(name="hrm_modulefeatures")
 * @ORM\Entity
 */
class HrmModulefeatures
{
    /**
     * @var string
     *
     * @ORM\Column(name="features_name", type="string", length=50, nullable=false)
     */
    private $featuresName;

    /**
     * @var string
     *
     * @ORM\Column(name="features_value", type="string", length=50, nullable=false)
     */
    private $featuresValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="iswriteaccess", type="boolean", nullable=false)
     */
    private $iswriteaccess;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date", nullable=false)
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmModules
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmModules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modules", referencedColumnName="id")
     * })
     */
    private $modules;



    /**
     * Set featuresName
     *
     * @param string $featuresName
     * @return HrmModulefeatures
     */
    public function setFeaturesName($featuresName)
    {
        $this->featuresName = $featuresName;
    
        return $this;
    }

    /**
     * Get featuresName
     *
     * @return string 
     */
    public function getFeaturesName()
    {
        return $this->featuresName;
    }

    /**
     * Set featuresValue
     *
     * @param string $featuresValue
     * @return HrmModulefeatures
     */
    public function setFeaturesValue($featuresValue)
    {
        $this->featuresValue = $featuresValue;
    
        return $this;
    }

    /**
     * Get featuresValue
     *
     * @return string 
     */
    public function getFeaturesValue()
    {
        return $this->featuresValue;
    }

    /**
     * Set iswriteaccess
     *
     * @param boolean $iswriteaccess
     * @return HrmModulefeatures
     */
    public function setIswriteaccess($iswriteaccess)
    {
        $this->iswriteaccess = $iswriteaccess;
    
        return $this;
    }

    /**
     * Get iswriteaccess
     *
     * @return boolean 
     */
    public function getIswriteaccess()
    {
        return $this->iswriteaccess;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return HrmModulefeatures
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modules
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmModules $modules
     * @return HrmModulefeatures
     */
    public function setModules(\Hrms\Bundle\EmployeeBundle\Entity\HrmModules $modules = null)
    {
        $this->modules = $modules;
    
        return $this;
    }

    /**
     * Get modules
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmModules 
     */
    public function getModules()
    {
        return $this->modules;
    }
}