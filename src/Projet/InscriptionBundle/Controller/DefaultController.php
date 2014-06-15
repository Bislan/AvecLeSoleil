<?php


namespace Projet\InscriptionBundle\Controller;

use Projet\InscriptionBundle\Entity\Inscription;
use Projet\InscriptionBundle\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;


class DefaultController extends Controller
{


    public function indexAction($site, $page)
    {

        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository("ProjetInscriptionBundle:Formation");

        $formation = $repository->findByslug($site);

        return $this->render('ProjetInscriptionBundle:Default:index.html.twig',
            array('formations' => $formation, 'site' => $site, 'page' => $page));

    }


    public function inscriptionAction($site, $page, $formationID)
    {
        $manager = $this->getDoctrine()->getManager();

        $detail = $manager->getRepository("ProjetInscriptionBundle:Formation")->findOneBy(array('id' => $formationID));
           $new_inscription = new Inscription();
              $form = $this->createForm(new InscriptionType(), $new_inscription);
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
                        ->setFormationId($formationID);

                    $manager->persist($new_inscription);
                    $manager->flush();

                    return $this->render('ProjetInscriptionBundle:Default:inscriptionReuci.html.twig', array('detail' => $detail));
              }


        return $this->render('ProjetInscriptionBundle:Default:inscription.html.twig',
            array(
                    'form' => $form->createView(),
                    'site' => $site,
                    'page' => $page,
                    'formationID' => $formationID));
    }

    public function paystatAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        $session->start();
        $hash = $session->get('name');
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository("ProjetInscriptionBundle:Inscription")->findOneBy(array('paypal_hash' => $hash));
        $product->setPaypalStat(true);
        $em->flush();

        return $this->render('ProjetInscriptionBundle:Default:paystat.html.twig');


    }


}
