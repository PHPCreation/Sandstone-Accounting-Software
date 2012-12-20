<?php

namespace Elcweb\Bundle\AccountingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TermType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('netduein')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Elcweb\Bundle\AccountingBundle\Entity\Term'
        ));
    }

    public function getName()
    {
        return 'elcweb_bundle_accountingbundle_termtype';
    }
}
