<?php

namespace Projet\ChapeauBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProjetChapeauBundle:Default:index.html.twig', array('name' => $name));
    }
}
