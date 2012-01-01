<?php

namespace Base\TestBundle\Admin;

use WhiteOctober\AdminBundle\DataManager\Doctrine\ORM\Admin\DoctrineORMAdmin;

class CategoryAdmin extends DoctrineORMAdmin
{
    protected function configure()
    {
        $this
            ->setName('Category')
            ->setDataClass('Base\TestBundle\Entity\Category')
            ->addActions(array(
                'doctrine.orm.crud',
            ))
            ->addFields(array(
                'title',
                'published',
            ))
        ;
    }
}
