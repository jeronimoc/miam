<?php

namespace MiamDataBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MiamDomainBundle\Entity\ShopBranch;

class LoadShopBranchData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getShopBranchList() as $shopBranchData) {
            $shopBranch = new ShopBranch();
            $shopBranch->setAddress("blabla");
            $shopBranch->setShop($this->getReference($shopBranchData[0]));
            $shopBranch->setLat($shopBranchData[1]);
            $shopBranch->setLng($shopBranchData[2]);

            $manager->persist($shopBranch);

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
        return 5;
    }

    /**
     * Return Ingredients for test data
     *
     * @return integer
     */
    public function getShopBranchList(){
        $shopsBranchesFile = fopen('src/MiamDataBundle/DataFixtures/testDataFiles/shop_branches.csv', 'r');
        $shopsBranchArray = array();

        while (($shopBranchData = fgetcsv($shopsBranchesFile)) !== false) {
            $shopsBranchArray [] = $shopBranchData;
        }

        fclose($shopsBranchesFile);

        return $shopsBranchArray;
    }
}