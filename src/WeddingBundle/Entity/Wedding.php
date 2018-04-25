<?php

namespace WeddingBundle\Entity;

/**
 * Wedding
 */
class Wedding
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $numPeople;

    /**
     * @var \WeddingBundle\Entity\Price
     */
    private $price;

    /**
     * @var \WeddingBundle\Entity\User
     */
    private $user;

    
    protected $menuWedding;
    
    public function _construct(){
        $this->menuWedding = new ArrayCollection();
    }
    
    public function addMenuWedding(\WeddingBundle\Entity\Menu $menu){
        $this->menuWedding[] = $menu;
        return $this;
    }
   
    public function getMenuWedding(){
        return $this->menuWedding;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Wedding
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Wedding
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
     * Set image
     *
     * @param string $image
     *
     * @return Wedding
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set numPeople
     *
     * @param integer $numPeople
     *
     * @return Wedding
     */
    public function setNumPeople($numPeople)
    {
        $this->numPeople = $numPeople;

        return $this;
    }

    /**
     * Get numPeople
     *
     * @return integer
     */
    public function getNumPeople()
    {
        return $this->numPeople;
    }

    /**
     * Set price
     *
     * @param \WeddingBundle\Entity\Price $price
     *
     * @return Wedding
     */
    public function setPrice(\WeddingBundle\Entity\Price $price = null)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return \WeddingBundle\Entity\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set user
     *
     * @param \WeddingBundle\Entity\User $user
     *
     * @return Wedding
     */
    public function setUser(\WeddingBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WeddingBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

