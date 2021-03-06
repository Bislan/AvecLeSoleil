<?php

namespace Projet\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($site , $siteid)
    {

            $manager = $this->getDoctrine()->getManager();
            $Article = $manager->getRepository('ProjetVideoBundle:Video')->findBy(array('rubriques' => $siteid));

            return $this->render('ProjetVideoBundle:Default:index.html.twig',
                array(
                       'articles' => $Article,
                       'site'  => $site,
                       'vid' => $siteid

                ));
    }

    public function videoCompletAction($site , $artid)
    {

        $manager = $this->getDoctrine()->getManager();
        $Article = $manager->getRepository('ProjetVideoBundle:Video')->findOneBy(array('id' => $artid));

        return $this->render('ProjetVideoBundle:Default:videoComplet.html.twig', array('articles' => $Article, 'site'  => $site ));
    }
}
