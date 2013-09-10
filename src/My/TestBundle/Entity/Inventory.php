<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 */
class Inventory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $guitars = array();


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
     * Set guitars
     *
     * @param string $guitars
     * @return Inventory
     */
    public function setGuitars($guitars)
    {
        $this->guitars = $guitars;
    
        return $this;
    }

    /**
     * Get guitars
     *
     * @return string 
     */
    public function getGuitars()
    {
        return $this->guitars;
    }
    
    public function addGuitar($serialNumber, $price, GuitarSpec $guitarSpec)
    {
        $guitar = new Guitar($serialNumber, $price, $guitarSpec);
        $this->guitars[] = $guitar;
    }
    
    public function getGuitar($serialNumber)
    {
        foreach ($this->guitars as $guitar)
        {
            if ($guitar->getSerialNumber() == $serialNumber)
                return $guitar;
        }
    }
    
    public function search(GuitarSpec $searchGuitar)
    {
        $guitars = array();
        foreach ($this->guitars as $guitar)
        {
            if ($guitar->getSpec()->matches($searchGuitar))
                $guitars[] = $guitar;
        }
        return $guitars;
    }
}