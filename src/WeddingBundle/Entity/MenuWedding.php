<?php

namespace WeddingBundle\Entity;

/**
 * MenuWedding
 */
class MenuWedding
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \WeddingBundle\Entity\Menu
     */
    private $menu;

    /**
     * @var \WeddingBundle\Entity\Wedding
     */
    private $wedding;


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
     * Set menu
     *
     * @param \WeddingBundle\Entity\Menu $menu
     *
     * @return MenuWedding
     */
    public function setMenu(\WeddingBundle\Entity\Menu $menu = null)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \WeddingBundle\Entity\Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set wedding
     *
     * @param \WeddingBundle\Entity\Wedding $wedding
     *
     * @return MenuWedding
     */
    public function setWedding(\WeddingBundle\Entity\Wedding $wedding = null)
    {
        $this->wedding = $wedding;

        return $this;
    }

    /**
     * Get wedding
     *
     * @return \WeddingBundle\Entity\Wedding
     */
    public function getWedding()
    {
        return $this->wedding;
    }
}

