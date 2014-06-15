<?php

namespace Projet\BaseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\BaseBundle\Entity\Rubriques;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{



    public function menuAction($site){



        
        
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository("ProjetBaseBundle:Rubriques");

        $menu = $repository->findBySiteslug($site);

        return $this->render('ProjetBaseBundle:Index:menu.html.twig', array(
            'menus' => $menu,
            'site'  => $site
        ));
    }





    public function pageAction($site , $page) {



        $manager = $this->getDoctrine()->getManager();
        $Article = $manager->getRepository('ProjetBaseBundle:Articles')->findByRubriques($page);

        return $this->render('ProjetBaseBundle:Index:pages.html.twig',
            array('articles' => $Article , 'site' => $site ));

    }
}
