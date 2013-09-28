<?php

namespace Hrms\Bundle\EmployeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrmRolefeatures
 *
 * @ORM\Table(name="hrm_rolefeatures")
 * @ORM\Entity
 */
class HrmRolefeatures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="isvisible", type="integer", nullable=false)
     */
    private $isvisible;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_1", type="integer", nullable=false)
     */
    private $id1;

    /**
     * @var integer
     *
     * @ORM\Column(name="isvisible_1", type="integer", nullable=false)
     */
    private $isvisible1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmModulefeatures
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmModulefeatures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modulefeatures", referencedColumnName="id")
     * })
     */
    private $modulefeatures;

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
     * @var \Hrms\Bundle\EmployeeBundle\Entity\HrmRoles
     *
     * @ORM\ManyToOne(targetEntity="Hrms\Bundle\EmployeeBundle\Entity\HrmRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roles", referencedColumnName="id")
     * })
     */
    private $roles;



    /**
     * Set isvisible
     *
     * @param integer $isvisible
     * @return HrmRolefeatures
     */
    public function setIsvisible($isvisible)
    {
        $this->isvisible = $isvisible;
    
        return $this;
    }

    /**
     * Get isvisible
     *
     * @return integer 
     */
    public function getIsvisible()
    {
        return $this->isvisible;
    }

    /**
     * Set id1
     *
     * @param integer $id1
     * @return HrmRolefeatures
     */
    public function setId1($id1)
    {
        $this->id1 = $id1;
    
        return $this;
    }

    /**
     * Get id1
     *
     * @return integer 
     */
    public function getId1()
    {
        return $this->id1;
    }

    /**
     * Set isvisible1
     *
     * @param integer $isvisible1
     * @return HrmRolefeatures
     */
    public function setIsvisible1($isvisible1)
    {
        $this->isvisible1 = $isvisible1;
    
        return $this;
    }

    /**
     * Get isvisible1
     *
     * @return integer 
     */
    public function getIsvisible1()
    {
        return $this->isvisible1;
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
     * Set modulefeatures
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmModulefeatures $modulefeatures
     * @return HrmRolefeatures
     */
    public function setModulefeatures(\Hrms\Bundle\EmployeeBundle\Entity\HrmModulefeatures $modulefeatures = null)
    {
        $this->modulefeatures = $modulefeatures;
    
        return $this;
    }

    /**
     * Get modulefeatures
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmModulefeatures 
     */
    public function getModulefeatures()
    {
        return $this->modulefeatures;
    }

    /**
     * Set modules
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmModules $modules
     * @return HrmRolefeatures
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

    /**
     * Set roles
     *
     * @param \Hrms\Bundle\EmployeeBundle\Entity\HrmRoles $roles
     * @return HrmRolefeatures
     */
    public function setRoles(\Hrms\Bundle\EmployeeBundle\Entity\HrmRoles $roles = null)
    {
        $this->roles = $roles;
    
        return $this;
    }

    /**
     * Get roles
     *
     * @return \Hrms\Bundle\EmployeeBundle\Entity\HrmRoles 
     */
    public function getRoles()
    {
        return $this->roles;
    }
}