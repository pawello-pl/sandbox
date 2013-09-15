<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BarkRecognizer
 */
class BarkRecognizer
{
    private $door;
    
    public function __construct(DogDoor $door) 
    {
        $this->door = $door;
    }
    
    public function recognize($bark)
    {
        echo 'Heard a bark' . $bark;
        echo '<br />';
        $this->door->open();
    }
}
