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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
