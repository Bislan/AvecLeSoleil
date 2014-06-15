<?php
/**
 * Created by PhpStorm.
 * User: BornToBeBad
 * Date: 11.06.14
 * Time: 13:41
 */



namespace Projet\BaseBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class RubriqueAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper

            ->add('titreFr')
            ->add('titreEn')





        ;
    }



    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titreFr')
            ->add('titreEn')






        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->addIdentifier('nomFr')
            ->addIdentifier('titreFr')
            ->add('titreEn')




        ;
    }
}