<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remote
 */
class Remote
{
    private $door;
    
    public function __construct(DogDoor $door) 
    {
        $this->door = $door;
    }
    
    public function pressButton()
    {
        echo 'pressing remote button';
        if ($this->door->isOpen())
        {
            $this->door->close();
        }
        else
        {
            $this->door->open();
        }
    }
}
