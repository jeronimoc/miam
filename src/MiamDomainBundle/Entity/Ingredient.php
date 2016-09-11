<?php

namespace MiamDomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredients")
 * @ORM\Entity(repositoryClass="MiamDomainBundle\Repository\IngredientRepository")
 */
class Ingredient
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="imageFile", type="string", length=255, nullable=true, unique=true)
     */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var IngredientDensity
     * 
     * @ORM\ManyToOne(targetEntity="MiamDomainBundle\Entity\IngredientDensity")
     */
    private $ingredientDensity;


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
     * Set name
     *
     * @param string $name
     *
     * @return Ingredient
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

    /**
     * Set imageFile
     *
     * @param string $imageFile
     *
     * @return Ingredient
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    /**
     * Get imageFile
     *
     * @return string
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ingredient
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ingredientDensity
     *
     * @param \MiamDomainBundle\Entity\IngredientDensity $ingredientDensity
     *
     * @return Ingredient
     */
    public function setIngredientDensity(\MiamDomainBundle\Entity\IngredientDensity $ingredientDensity = null)
    {
        $this->ingredientDensity = $ingredientDensity;

        return $this;
    }

    /**
     * Get ingredientDensity
     *
     * @return \MiamDomainBundle\Entity\IngredientDensity
     */
    public function getIngredientDensity()
    {
        return $this->ingredientDensity;
    }
}
