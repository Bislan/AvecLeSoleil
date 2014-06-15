<?php

namespace Projet\RealisationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AchatType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('ville')
            ->add('rue')
            ->add('codepostal')
            ->add('tel')
            ->add('email')


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\RealisationBundle\Entity\Achat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_realisationbundle_achat';
    }
}
