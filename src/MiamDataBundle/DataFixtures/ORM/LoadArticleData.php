<?php

namespace MiamDataBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MiamDomainBundle\Entity\Article;

class LoadArticleData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getArticlesList() as $articleData) {
            $article = new Article();
            $article->setName($articleData[1]);
            $article->setIngredient($this->getReference($articleData[0]));
            $manager->persist($article);
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
        return 3;
    }

    /**
     * Return Articles for test data
     *
     * @return integer
     */
    public function getArticlesList(){
        $articlesFile = fopen('src/MiamDataBundle/DataFixtures/testDataFiles/articles.csv', 'r');
        $articlesArray = array();

        while (($articleData = fgetcsv($articlesFile)) !== false) {
            $articlesArray[] = $articleData;
        }

        fclose($articlesFile);

        return $articlesArray;
    }
}