<?php

namespace Hrms\Bundle\EmployeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HrmStateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('stateName')
            ->add('stateCode')
            ->add('country','entity',array('class'=>'HrmsEmployeeBundle:HrmCountry', 'property'=>"country_name"))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hrms\Bundle\EmployeeBundle\Entity\HrmState'
        ));
    }

    public function getName()
    {
        return 'hrms_bundle_employeebundle_hrmstatetype';
    }
}
