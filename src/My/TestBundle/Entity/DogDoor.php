<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DogDoor
 */
class DogDoor
{
    private $open = false;
    
    public function open()
    {
        echo 'Dog door opens';
        $this->open = true;
        
            sleep(0.5);
            echo 'waiting 0,5 sec...';
            echo '<br />';
            $this->close();        
    }
    
    public function close()
    {
        echo 'Dog door closes';
        $this->open = false;
    }
    
    public function isOpen()
    {
        return $this->open;
    }
    
}
