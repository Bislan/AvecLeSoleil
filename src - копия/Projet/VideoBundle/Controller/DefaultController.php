<?php

namespace Projet\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($site , $siteid)
    {

            $manager = $this->getDoctrine()->getManager();
            $Article = $manager->getRepository('ProjetBaseBundle:Articles')->findBy(array('rubriques' => $siteid));

            return $this->render('ProjetVideoBundle:Default:index.html.twig', array('articles' => $Article ));
    }
}
