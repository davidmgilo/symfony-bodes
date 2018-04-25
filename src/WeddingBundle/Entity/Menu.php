<?php

namespace WeddingBundle\Entity;

/**
 * Menu
 */
class Menu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $dishes;

    /**
     * @var string
     */
    private $description;

    protected $menuWedding;
    
    public function _construct(){
        $this->menuWedding = new ArrayCollection();
    }
    
    public function addMenuWedding(\WeddingBundle\Entity\Wedding $wedding){
        $this->menuWedding[] = $wedding;
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
     * Set name
     *
     * @param string $name
     *
     * @return Menu
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
     * Set dishes
     *
     * @param string $dishes
     *
     * @return Menu
     */
    public function setDishes($dishes)
    {
        $this->dishes = $dishes;

        return $this;
    }

    /**
     * Get dishes
     *
     * @return string
     */
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Menu
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
}

