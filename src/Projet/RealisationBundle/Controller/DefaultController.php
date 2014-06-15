<?php

namespace Projet\RealisationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\RealisationBundle\Entity\Achat;
use Projet\RealisationBundle\Form\AchatType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function indexAction($site, $rubrique  )
    {

        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository("ProjetRealisationBundle:Produit");

        $articles = $repository->findAll();

        return $this->render('ProjetRealisationBundle:Default:index.html.twig',
            array('site' => $site,'rubrique' =>$rubrique, 'produits' => $articles));

    }

    public function detailAction($site, $rubrique , $prodid  )
    {

        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository("ProjetRealisationBundle:Produit");

        $article = $repository->findOneByid($prodid);

        return $this->render('ProjetRealisationBundle:Default:detail.html.twig',
            array('site' => $site,'rubrique' =>$rubrique, 'produit' => $article));

    }





    public function achterFormAction($site, $rubrique, $prodid)
{
    $manager = $this->getDoctrine()->getManager();

    $prodartic = $manager->getRepository("ProjetRealisationBundle:Produit")->findOneBy(array('id' => $prodid));
    $new_inscription = new Achat();
    $form = $this->createForm(new AchatType(), $new_inscription);
    $request = $this->getRequest();


    if ($request->isMethod('POST')) {

        $session = $request->getSession();
        $session->start();
        $rand_hash = md5(uniqid(rand(), true));
        $session->set('name', $rand_hash);
        $hash = $session->get('name');

        $form->bind($request);
        $new_inscription->setDate(new \DateTime())
                        ->setPaypalHash($hash)
                        ->setArticle($prodid);

        $manager->persist($new_inscription);
        $manager->flush();

        return $this->render('ProjetRealisationBundle:Default:inscriptionReuci.html.twig', array('detail' => $prodartic));
    }


    return $this->render('ProjetRealisationBundle:Default:inscription.html.twig',
        array(
            'form' => $form->createView(),
            'site' => $site,
            'rubrique' => $rubrique,
            'prodid' => $prodid));
    }

    public function paystatAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        $session->start();
            $hash = $session->get('name');

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository("ProjetRealisationBundle:Achat")->findOneBy(array('paypal_hash' => $hash));
        $req = $product->getArticle();

        $product->setPaypalStat(true);
        $em->flush();


        $manager= $this->getDoctrine()->getManager();
        $prod = $manager->getRepository("ProjetRealisationBundle:Produit")->findOneBy(array('id' => $req));
        $prod->setStatusVend(true);
        $manager->flush();


            return $this->render('ProjetRealisationBundle:Default:paystat.html.twig');





    }



}
