<?php
/**
 * Created by PhpStorm.
 * User: BornToBeBad
 * Date: 08.06.14
 * Time: 21:01
 */


namespace Projet\BaseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\BaseBundle\Entity\Rubriques;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{


    public function languageAction()
    {
        $language = $this->getRequest()->get('language');
        return $this->redirect($this->generateUrl('projet_base_page_detail', array('_locale' => $language)));
    }





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

    public function pageAction($site,$action =1 ,$page)
    {
        $test = 'bes';


        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM ProjetBaseBundle:Articles a WHERE a.rubriques='".$page."'";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $this->get('request')->query->get('action',$action)/*page number*/,
            2/*limit per page*/
        );

        // parameters to template
        return $this->render('ProjetBaseBundle:Index:pages.html.twig', array('pagination' => $pagination, 'site' => $site ,'action' =>$action , 'page'=>$page));
    }

    public function pageDatailAction($site , $page ) {



        $manager = $this->getDoctrine()->getManager();
        $Article = $manager->getRepository('ProjetBaseBundle:Articles')->findOneByid($page);

        return $this->render('ProjetBaseBundle:Index:pagesDatail.html.twig',
            array('articles' => $Article , 'site' => $site ));

    }
}
