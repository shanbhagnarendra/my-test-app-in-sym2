<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmTimezone
 *
 * @ORM\Table(name="hrm_timezone")
 * @ORM\Entity
 */
class HrmTimezone
{
    /**
     * @var float
     *
     * @ORM\Column(name="timezone_value", type="float", nullable=false)
     */
    private $timezoneValue;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone_text", type="string", length=100, nullable=false)
     */
    private $timezoneText;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set timezoneValue
     *
     * @param float $timezoneValue
     * @return HrmTimezone
     */
    public function setTimezoneValue($timezoneValue)
    {
        $this->timezoneValue = $timezoneValue;
    
        return $this;
    }

    /**
     * Get timezoneValue
     *
     * @return float 
     */
    public function getTimezoneValue()
    {
        return $this->timezoneValue;
    }

    /**
     * Set timezoneText
     *
     * @param string $timezoneText
     * @return HrmTimezone
     */
    public function setTimezoneText($timezoneText)
    {
        $this->timezoneText = $timezoneText;
    
        return $this;
    }

    /**
     * Get timezoneText
     *
     * @return string 
     */
    public function getTimezoneText()
    {
        return $this->timezoneText;
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