<?php

namespace Projet\InscriptionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
        $request = Request::createFromGlobals();
        $path = $request->getPathInfo();
        $array = explode('/',$path);
        $ittem = array_shift($array);
        */




        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('rue')
            ->add('datedenaissance')
            ->add('boite')
            ->add('tel')
            ->add('codepostal')
            ->add('ville')
            ->add('date','hidden')

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\InscriptionBundle\Entity\Inscription'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_inscriptionbundle_inscription';
    }
}
