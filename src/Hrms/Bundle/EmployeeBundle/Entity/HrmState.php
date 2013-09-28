<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmState
 *
 * @ORM\Table(name="hrm_state")
 * @ORM\Entity
 */
class HrmState
{
    /**
     * @var string
     *
     * @ORM\Column(name="state_name", type="string", length=100, nullable=false)
     */
    private $stateName;

    /**
     * @var string
     *
     * @ORM\Column(name="state_code", type="string", length=100, nullable=false)
     */
    private $stateCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmCountry
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country", referencedColumnName="id")
     * })
     */
    private $country;



    /**
     * Set stateName
     *
     * @param string $stateName
     * @return HrmState
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
    
        return $this;
    }

    /**
     * Get stateName
     *
     * @return string 
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * Set stateCode
     *
     * @param string $stateCode
     * @return HrmState
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
    
        return $this;
    }

    /**
     * Get stateCode
     *
     * @return string 
     */
    public function getStateCode()
    {
        return $this->stateCode;
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
     * Set country
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmCountry $country
     * @return HrmState
     */
    public function setCountry(\Hrms\Bundle\EmployeeBundle\Entity\HrmCountry $country = null)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmCountry 
     */
    public function getCountry()
    {
        return $this->country;
    }
}