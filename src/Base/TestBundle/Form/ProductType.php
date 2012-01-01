<?php

namespace Base\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('model')
            ->add('posted_at')
            ->add('expires_at')
            ->add('published')
            ->add('category')
        ;
    }

    public function getName()
    {
        return 'base_testbundle_producttype';
    }
}
