<?php

namespace Hrms\Bundle\EmployeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HrmRolesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('roleName')
            ->add('roleDescription')
            ->add('createDate')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hrms\Bundle\EmployeeBundle\Entity\HrmRoles'
        ));
    }

    public function getName()
    {
        return 'hrms_bundle_employeebundle_hrmrolestype';
    }
}
