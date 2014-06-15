<?php

namespace Projet\ChapeauBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChapeauController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjetChapeauBundle:Chapeau:index.html.twig');
    }
}