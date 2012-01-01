<?php

namespace Base\TestBundle\Admin;

use WhiteOctober\AdminBundle\DataManager\Doctrine\ORM\Admin\DoctrineORMAdmin;

class ProductAdmin extends DoctrineORMAdmin
{
    protected function configure()
    {
        $this
            ->setName('Product')
            ->setDataClass('Base\TestBundle\Entity\Product')
            ->addActions(array(
                'doctrine.orm.crud',
            ))
            ->addFields(array(
                'title',
                'model',
                'category',
                //'postedAt',
                'published'
            ))
            ->setActionOption("list", "batch", false)
        ;
    }
}
