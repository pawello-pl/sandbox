<?php

namespace My\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $door = new \My\TestBundle\Entity\DogDoor();
        $barkRecognizer = new \My\TestBundle\Entity\BarkRecognizer($door);
        $remote = new \My\TestBundle\Entity\Remote($door);
        
        echo 'fido starts barking';
        echo '<br />';
        $barkRecognizer->recognize('wof');
        echo 'fido gone outside';
        echo '<Br />';
        echo 'fido s all done';
        echo '<Br />';
        echo 'he stucked outside';
        echo '<Br />';
        echo 'fido is barking';
        echo '<Br />';
        $barkRecognizer->recognize('wofff');
        echo 'fido is inside';
        echo '<Br />';
        
        /*
        $door = new \My\TestBundle\Entity\DogDoor();
        $remote = new \My\TestBundle\Entity\Remote($door);
        echo 'fido barks';
        echo '<br />';
        $remote->pressButton();
        echo '<br />';
        echo 'fido goes outside';
        echo '<br />';
        //$remote->pressButton();
        echo '<br />';
        echo 'fido is done';
        echo '<br />';
        //$remote->pressButton();
        echo '<br />';
        echo 'fido backs inside';
        echo '<br />';
        //$remote->pressButton();
        echo '<br />';*/
        
        
        return $this->render('MyTestBundle:Default:index.html.twig');
    }
}
