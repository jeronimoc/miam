<?php

namespace MiamDataBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MiamDomainBundle\Entity\Shop;

class LoadShopData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getShopList() as $shopData) {
            $shop = new Shop();
            $shop->setName($shopData[0]);

            $manager->persist($shop);

            $this->addReference($shop->getName(), $shop);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 4;
    }

    /**
     * Return Ingredients for test data
     *
     * @return integer
     */
    public function getShopList(){
        $shopsFile = fopen('src/MiamDataBundle/DataFixtures/testDataFiles/shops.csv', 'r');
        $shopsArray = array();

        while (($shopData = fgetcsv($shopsFile)) !== false) {
            $shopsArray[] = $shopData;
        }

        fclose($shopsFile);

        return $shopsArray;
    }
}