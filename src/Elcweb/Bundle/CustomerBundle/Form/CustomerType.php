<?php

namespace Elcweb\Bundle\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('company')
            ->add('displayname')
            ->add('terms')
            ->add('created_at')
            ->add('modified_at')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Elcweb\Bundle\CustomerBundle\Entity\Customer'
        ));
    }

    public function getName()
    {
        return 'elcweb_bundle_customerbundle_customertype';
    }
}
