<?php

namespace Base\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('published')
        ;
    }

    public function getName()
    {
        return 'base_testbundle_categorytype';
    }
}
