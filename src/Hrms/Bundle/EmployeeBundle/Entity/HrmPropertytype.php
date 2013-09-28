<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmPropertytype
 *
 * @ORM\Table(name="hrm_propertytype")
 * @ORM\Entity
 */
class HrmPropertytype
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_name", type="string", length=255, nullable=false)
     */
    private $typeName;

    /**
     * @var string
     *
     * @ORM\Column(name="type_description", type="string", length=50, nullable=false)
     */
    private $typeDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company", referencedColumnName="id")
     * })
     */
    private $company;



    /**
     * Set typeName
     *
     * @param string $typeName
     * @return HrmPropertytype
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
    
        return $this;
    }

    /**
     * Get typeName
     *
     * @return string 
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set typeDescription
     *
     * @param string $typeDescription
     * @return HrmPropertytype
     */
    public function setTypeDescription($typeDescription)
    {
        $this->typeDescription = $typeDescription;
    
        return $this;
    }

    /**
     * Get typeDescription
     *
     * @return string 
     */
    public function getTypeDescription()
    {
        return $this->typeDescription;
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
     * Set company
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company
     * @return HrmPropertytype
     */
    public function setCompany(\Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company = null)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany 
     */
    public function getCompany()
    {
        return $this->company;
    }
}