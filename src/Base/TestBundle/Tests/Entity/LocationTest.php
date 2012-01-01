<?php
/**
 * Location class test
 *
 * @author Benjamin Grandfond <benjaming@theodo.fr>
 * @since 2011-07-16
 */
namespace Base\TestBundle\Tests\Entity;

use Base\TestBundle\Entity\Location;
use Base\TestBundle\Tests\BaseTestCase;
 
//require_once dirname(__DIR__).'/TestCase.php';

class LocationTest extends BaseTestCase
{
    protected $location;
 
    public function setUp()
    {
        parent::setUp();
 
        $this->location = new Location();
    }
 
    public function testGetAddress()
    {
        $address = '80 Rue Curial';
 
        $this->location->setAddress($address);
 
        $this->assertEquals($address, $this->location->getAddress());
    }
    
    public function testGenerateLocalization()
    {
        
        echo "test Generate Localizacion";
        $this->location->setAddress('14 Rue Notre-Dame-des-Victoires');
        $this->location->setZip('75002');
        $this->location->setCity('Paris');
        $this->location->setCountry('FR');
 
        // Save the location 
        $this->entityManager->persist($this->location);
        $this->entityManager->flush();

        $this->assertEquals('14 Rue Notre-Dame-des-Victoires 75002 Paris FR', $this->location->getLocalization());
    }
}