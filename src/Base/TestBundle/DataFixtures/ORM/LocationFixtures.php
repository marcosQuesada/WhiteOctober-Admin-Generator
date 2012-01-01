<?php

namespace Base\TestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Base\TestBundle\Entity\Location;

class LoadLocationData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load($manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $var = 'Location'.$i;
            $$var = new Location();
            $$var->setAddress('CategoryTest'.$i);
            $$var->setTitle('Product-Fixture'.$i);            
            $$var->setZip('Zip',$i);
            $$var->setCity('City'.$i);
            $$var->setLocalization('Localization'.$i);
            $$var->setCountry('Country'.$i);
            
            $manager->persist($$var);
        }
        $manager->flush();

    }

    public function getOrder()
    {
        return 1;
    }
}