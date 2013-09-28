<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmAgegroup
 *
 * @ORM\Table(name="hrm_agegroup")
 * @ORM\Entity
 */
class HrmAgegroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="color_code", type="string", length=10, nullable=false)
     */
    private $colorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="age_limit", type="string", length=15, nullable=false)
     */
    private $ageLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="start_age", type="integer", nullable=true)
     */
    private $startAge;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_age", type="integer", nullable=true)
     */
    private $endAge;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set colorCode
     *
     * @param string $colorCode
     * @return HrmAgegroup
     */
    public function setColorCode($colorCode)
    {
        $this->colorCode = $colorCode;
    
        return $this;
    }

    /**
     * Get colorCode
     *
     * @return string 
     */
    public function getColorCode()
    {
        return $this->colorCode;
    }

    /**
     * Set ageLimit
     *
     * @param string $ageLimit
     * @return HrmAgegroup
     */
    public function setAgeLimit($ageLimit)
    {
        $this->ageLimit = $ageLimit;
    
        return $this;
    }

    /**
     * Get ageLimit
     *
     * @return string 
     */
    public function getAgeLimit()
    {
        return $this->ageLimit;
    }

    /**
     * Set startAge
     *
     * @param integer $startAge
     * @return HrmAgegroup
     */
    public function setStartAge($startAge)
    {
        $this->startAge = $startAge;
    
        return $this;
    }

    /**
     * Get startAge
     *
     * @return integer 
     */
    public function getStartAge()
    {
        return $this->startAge;
    }

    /**
     * Set endAge
     *
     * @param integer $endAge
     * @return HrmAgegroup
     */
    public function setEndAge($endAge)
    {
        $this->endAge = $endAge;
    
        return $this;
    }

    /**
     * Get endAge
     *
     * @return integer 
     */
    public function getEndAge()
    {
        return $this->endAge;
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