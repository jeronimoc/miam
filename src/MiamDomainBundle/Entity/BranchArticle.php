<?php

namespace MiamDomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BranchArticle
 *
 * @ORM\Table(name="branch_article")
 * @ORM\Entity(repositoryClass="MiamDomainBundle\Repository\BranchArticleRepository")
 */
class BranchArticle
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
     * @var Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     */
    private $article;


    /**
     * @var ShopBranch
     *
     * @ORM\ManyToOne(targetEntity="ShopBranch")
     */
    private $branch;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=6)
     */
    private $price;


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
     * Set price
     *
     * @param integer $price
     *
     * @return BranchArticle
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set article
     *
     * @param \MiamDomainBundle\Entity\Article $article
     *
     * @return BranchArticle
     */
    public function setArticle(\MiamDomainBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \MiamDomainBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set branch
     *
     * @param \MiamDomainBundle\Entity\ShopBranch $branch
     *
     * @return BranchArticle
     */
    public function setBranch(\MiamDomainBundle\Entity\ShopBranch $branch = null)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return \MiamDomainBundle\Entity\ShopBranch
     */
    public function getBranch()
    {
        return $this->branch;
    }
}
