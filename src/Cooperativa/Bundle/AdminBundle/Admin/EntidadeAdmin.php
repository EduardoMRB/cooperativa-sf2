<?php

namespace Cooperativa\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class EntidadeAdmin extends Admin
{
    public function configureFormFields(FormMapper $formMapper)
    {
        return $formMapper
            ->add('nome')
            ->add('cnpj')
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        return $datagridMapper
            ->add('nome')
            ->add('cnpj')
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        return $listMapper
            ->addIdentifier('nome')
            ->addIdentifier('cnpj')
        ;
    }
}