<?php

namespace MiamDomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopBranch
 *
 * @ORM\Table(name="shop_branch")
 * @ORM\Entity(repositoryClass="MiamDomainBundle\Repository\ShopBranchRepository")
 */
class ShopBranch
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
     * @var Shop
     *
     * @ORM\ManyToOne(targetEntity="Shop")
     */
    private $shop;

    /**
     * @var String
     *
     *
     * @ORM\Column(name="address", type="string")
     */
    private $address;

    /**
     * @var float
     *
     * Latitude for geolocation
     *
     * @ORM\Column(name="lat", type="float", precision=10, scale=6)
     */
    private $lat;

    /**
     * @var int
     *
     * Longitude for geolocation
     *
     * @ORM\Column(name="long", type="float", precision=10, scale=6)
     */
    private $lng;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
