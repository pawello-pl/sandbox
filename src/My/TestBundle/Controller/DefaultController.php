<?php

namespace My\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TestBundle\Entity\Builder;
use My\TestBundle\Entity\Type;
use My\TestBundle\Entity\Wood;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $inventory = new \My\TestBundle\Entity\Inventory();
        
        $guitarSpec = new \My\TestBundle\Entity\GuitarSpec(Builder::FENDER, 'Stratocastor', Type::ELECTRIC, Wood::ALDER, Wood::ALDER);
        
        $inventory->addGuitar(123123, 1500, $guitarSpec);
        $inventory->addGuitar(12311123, 1600, $guitarSpec);
        
        $guitarLike = new \My\TestBundle\Entity\GuitarSpec(Builder::FENDER, 'Stratocastor', Type::ELECTRIC, Wood::ALDER, Wood::ALDER);
        
        
        $guitars = $inventory->search($guitarLike);        
        
        if ($guitars)
        {
            foreach ($guitars as $guitar)
                echo $guitar->getSerialNumber() . '<br />';
        }
        else
        {
            echo 'not found';
        }
        
        return $this->render('MyTestBundle:Default:index.html.twig');
    }
}
