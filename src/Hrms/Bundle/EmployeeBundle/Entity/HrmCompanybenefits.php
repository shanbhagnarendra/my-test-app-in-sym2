<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCompanybenefits
 *
 * @ORM\Table(name="hrm_companybenefits")
 * @ORM\Entity
 */
class HrmCompanybenefits
{
    /**
     * @var string
     *
     * @ORM\Column(name="benefit_name", type="string", length=100, nullable=false)
     */
    private $benefitName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_set", type="boolean", nullable=false)
     */
    private $isSet;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
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
     * Set benefitName
     *
     * @param string $benefitName
     * @return HrmCompanybenefits
     */
    public function setBenefitName($benefitName)
    {
        $this->benefitName = $benefitName;
    
        return $this;
    }

    /**
     * Get benefitName
     *
     * @return string 
     */
    public function getBenefitName()
    {
        return $this->benefitName;
    }

    /**
     * Set isSet
     *
     * @param boolean $isSet
     * @return HrmCompanybenefits
     */
    public function setIsSet($isSet)
    {
        $this->isSet = $isSet;
    
        return $this;
    }

    /**
     * Get isSet
     *
     * @return boolean 
     */
    public function getIsSet()
    {
        return $this->isSet;
    }

    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set company
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCompany $company
     * @return HrmCompanybenefits
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