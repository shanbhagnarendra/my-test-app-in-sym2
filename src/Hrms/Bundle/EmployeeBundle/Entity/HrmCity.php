<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmCity
 *
 * @ORM\Table(name="hrm_city")
 * @ORM\Entity
 */
class HrmCity
{
    /**
     * @var string
     *
     * @ORM\Column(name="city_name", type="string", length=100, nullable=false)
     */
    private $cityName;

    /**
     * @var string
     *
     * @ORM\Column(name="city_code", type="string", length=100, nullable=false)
     */
    private $cityCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmState
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmState")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state", referencedColumnName="id")
     * })
     */
    private $state;



    /**
     * Set cityName
     *
     * @param string $cityName
     * @return HrmCity
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    
        return $this;
    }

    /**
     * Get cityName
     *
     * @return string 
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set cityCode
     *
     * @param string $cityCode
     * @return HrmCity
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
    
        return $this;
    }

    /**
     * Get cityCode
     *
     * @return string 
     */
    public function getCityCode()
    {
        return $this->cityCode;
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
     * Set state
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmState $state
     * @return HrmCity
     */
    public function setState(\Hrms\Bundle\EmployeeBundle\Entity\HrmState $state = null)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmState 
     */
    public function getState()
    {
        return $this->state;
    }
}