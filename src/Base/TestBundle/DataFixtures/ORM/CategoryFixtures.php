<?php

namespace Base\TestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Base\TestBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load($manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $var = 'Category-'.$i;
            $$var = new Category();
            $$var->setTitle('Category-Fixture-'.$i);
            $$var->setPublished(TRUE);
            
            $manager->persist($$var);
            $this->addReference('category-'.$i, $$var);
        }
        $manager->flush();

    }

    public function getOrder()
    {
        return 2;
    }
}