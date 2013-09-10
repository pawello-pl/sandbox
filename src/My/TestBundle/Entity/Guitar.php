<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guitar
 */
class Guitar
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var string
     */
    private $price;

    private $spec;


    public function __construct($serialNumber, $price, GuitarSpec $spec) 
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
                
        
    }
    
    public function getSpec()
    {
        return $this->spec;
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
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return Guitar
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    
        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string 
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Guitar
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set builder
     *
     * @param string $builder
     * @return Guitar
     */
    public function setBuilder($builder)
    {
        $this->builder = $builder;
    
        return $this;
    }

    /**
     * Get builder
     *
     * @return string 
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Guitar
     */
    public function setModel($model)
    {
        $this->model = $model;
    
        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Guitar
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set backWood
     *
     * @param string $backWood
     * @return Guitar
     */
    public function setBackWood($backWood)
    {
        $this->backWood = $backWood;
    
        return $this;
    }

    /**
     * Get backWood
     *
     * @return string 
     */
    public function getBackWood()
    {
        return $this->backWood;
    }

    /**
     * Set topWood
     *
     * @param string $topWood
     * @return Guitar
     */
    public function setTopWood($topWood)
    {
        $this->topWood = $topWood;
    
        return $this;
    }

    /**
     * Get topWood
     *
     * @return string 
     */
    public function getTopWood()
    {
        return $this->topWood;
    }
    /**
     * @var string
     */
    private $builder;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $backWood;

    /**
     * @var string
     */
    private $topWood;


}