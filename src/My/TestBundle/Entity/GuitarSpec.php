<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuitarSpec
 */
class GuitarSpec
{
    /**
     * @var integer
     */
    private $id;

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
    
    private $numStrings;

    /**
     * @var string
     */
    private $topWood;

    public function __construct($builder, $model, $type, $backWood, $topWood, $numStrings = null) 
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
        $this->numStrings = $numStrings;
    }
    
    public function matches(GuitarSpec $spec)
    {
        
            if ($this->getBuilder() != $spec->getBuilder())
                continue;
            if ($this->getType() != $spec->getType())
                continue;
            if ($this->getBackWood() != $spec->getBackWood())
                continue;
            if ($this->getTopWood() != $spec->getTopWood())
                continue;        
            return true;
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
     * Set builder
     *
     * @param string $builder
     * @return GuitarSpec
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
     * @return GuitarSpec
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
     * @return GuitarSpec
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
     * @return GuitarSpec
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
     * @return GuitarSpec
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
}