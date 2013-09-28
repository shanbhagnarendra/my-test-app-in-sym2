<?php

namespace Hrms\Bundle\EmployeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HrmCompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCompany')
            ->add('idAdmin')
            ->add('companyName')
            ->add('companyInfo')
            ->add('displayname')
            ->add('emailId')
            ->add('password')
            ->add('rePassword')
            ->add('role')
            ->add('address')
            ->add('taxId')
            ->add('twitterId')
            ->add('facebookId')
            ->add('linkedinId')
            ->add('logo')
            ->add('language')
            ->add('currency')
            ->add('timezone')
            ->add('addDate')
            ->add('lastLogin')
            ->add('isactive')
            ->add('ip')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hrms\Bundle\EmployeeBundle\Entity\HrmCompany'
        ));
    }

    public function getName()
    {
        return 'hrms_bundle_employeebundle_hrmcompanytype';
    }
}
