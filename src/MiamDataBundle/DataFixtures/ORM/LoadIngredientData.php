<?php

namespace MiamDataBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MiamDomainBundle\Entity\Ingredient;

class LoadIngredientData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getIngredientsList() as $ingredientName) {
            $ingredient = new Ingredient();
            $ingredient->setName($ingredientName);
            $manager->persist($ingredient);

            $this->addReference($ingredientName, $ingredient);
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
        return 2;
    }

    /**
     * Return Ingredients for test data
     *
     * @return integer
     */
    public function getIngredientsList(){
        $ingredientsFile = fopen('src/MiamDataBundle/DataFixtures/testDataFiles/ingredients.csv', 'r');
        $ingredientsArray = array();

        while (($line = fgetcsv($ingredientsFile)) !== false) {
            $ingredientsArray[] = $line[0];
        }

        fclose($ingredientsFile);

        return $ingredientsArray;
    }
}