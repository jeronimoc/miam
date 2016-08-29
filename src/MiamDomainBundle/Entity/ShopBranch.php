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
     * @ORM\Column(name="address", type="string", nullable=true)
     */
    private $address;

    /**
     * @var float
     *
     * Latitude for geolocation
     *
     * @ORM\Column(name="lat", type="decimal", precision=10, scale=6)
     */
    private $lat;

    /**
     * @var int
     *
     * Longitude for geolocation
     *
     * @ORM\Column(name="lng", type="decimal", precision=10, scale=6)
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

    /**
     * Set address
     *
     * @param string $address
     *
     * @return ShopBranch
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return ShopBranch
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     *
     * @return ShopBranch
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set shop
     *
     * @param \MiamDomainBundle\Entity\Shop $shop
     *
     * @return ShopBranch
     */
    public function setShop(\MiamDomainBundle\Entity\Shop $shop = null)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get shop
     *
     * @return \MiamDomainBundle\Entity\Shop
     */
    public function getShop()
    {
        return $this->shop;
    }
}
