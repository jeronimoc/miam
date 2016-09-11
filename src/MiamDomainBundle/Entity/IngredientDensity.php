<?php

namespace MiamDomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IngredientDensity
 *
 * @ORM\Table(name="ingredient_density")
 * @ORM\Entity(repositoryClass="MiamDomainBundle\Repository\IngredientDensityRepository")
 */
class IngredientDensity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="measurmentUnit", type="string", length=2)
     */
    private $measurmentUnit;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set measurmentUnit
     *
     * @param string $measurmentUnit
     *
     * @return IngredientDensity
     */
    public function setMeasurmentUnit($measurmentUnit)
    {
        $this->measurmentUnit = $measurmentUnit;

        return $this;
    }

    /**
     * Get measurmentUnit
     *
     * @return string
     */
    public function getMeasurmentUnit()
    {
        return $this->measurmentUnit;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return IngredientDensity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
