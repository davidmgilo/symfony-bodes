<?php

namespace WeddingBundle\Entity;

/**
 * Price
 */
class Price
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
     * @var integer
     */
    private $val;

    /**
     * @var string
     */
    private $description;

    protected $wedding;
    
    public function _construct(){
        $this->wedding = new ArrayCollection();
    }
    
    public function addWedding(\WeddingBundle\Entity\Wedding $wedding){
        $this->wedding[] = $wedding;
        return $this;
    }
    
    public function getWeddings(){
        return $this->wedding;
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
     * @return Price
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
     * Set val
     *
     * @param integer $val
     *
     * @return Price
     */
    public function setVal($val)
    {
        $this->val = $val;

        return $this;
    }

    /**
     * Get val
     *
     * @return integer
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Price
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

