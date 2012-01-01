<?php

namespace Base\TestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Base\TestBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load($manager)
    {
           
        for ($i = 1; $i <= 10; $i++){
            $category = $this->getReference('category-'.$i);
            $var = 'Product'.$i;
            $$var = new Product();
            $$var->setTitle('Product-Fixture'.$i);
            $$var->setModel('Model'.$i);
            //$$var->addCategory($category);
            $$var->setCategory($category);
            $$var->setPublished(TRUE);
            
            $manager->persist($$var);
        }
        $manager->flush();

    }

    public function getOrder()
    {
        return 3;
    }
}