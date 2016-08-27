<?php
/**
 * Created by PhpStorm.
 * User: jeronimo
 * Date: 27/08/16
 * Time: 14:45
 */

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
        $ingredient = new Ingredient();
        $ingredient->setName("zanahoria");
        $ingredient->setDescription("Verdura naranja");

        $manager->persist($ingredient);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}