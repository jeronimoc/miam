<?php

namespace MiamDataBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MiamDomainBundle\Entity\IngredientDensity;

class LoadMasterData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $liquidIngredient = new IngredientDensity();
        $liquidIngredient->setName("liquid");
        $liquidIngredient->setMeasurmentUnit("ml");
        $manager->persist($liquidIngredient);

        $solidIngredient = new IngredientDensity();
        $solidIngredient->setName("solid");
        $solidIngredient->setMeasurmentUnit("gr");
        $manager->persist($solidIngredient);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 7;
    }
}