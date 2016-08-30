<?php

namespace MiamDataBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MiamDomainBundle\Entity\BranchArticle;

class LoadShopArticleData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getShopArticleList() as $shopArticleData) {
            $shopArticle = new BranchArticle();
            $shopArticle->setArticle($this->getReference($shopArticleData[1]));
            $shopArticle->setBranch($this->getReference($shopArticleData[0]));
            $shopArticle->setPrice($shopArticleData[2]);

            $manager->persist($shopArticle);
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
        return 6;
    }

    /**
     * Return ShopArticles for test data
     *
     * @return integer
     */
    public function getShopArticleList(){
        $shopArticlesData = fopen('src/MiamDataBundle/DataFixtures/testDataFiles/shop_articles.csv', 'r');
        $shopArticlesArray = array();

        while (($shopArticleData = fgetcsv($shopArticlesData)) !== false) {
            $shopArticlesArray [] = $shopArticleData;
        }

        fclose($shopArticlesData);

        return $shopArticlesArray;
    }
}