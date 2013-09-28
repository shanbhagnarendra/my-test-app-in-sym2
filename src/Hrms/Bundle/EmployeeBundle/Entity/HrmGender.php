<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmGender
 *
 * @ORM\Table(name="hrm_gender")
 * @ORM\Entity
 */
class HrmGender
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
     * @ORM\Column(name="gender", type="string", length=7, nullable=false)
     */
    private $gender;

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
     * @return HrmGender
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
     * Set gender
     *
     * @param string $gender
     * @return HrmGender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
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