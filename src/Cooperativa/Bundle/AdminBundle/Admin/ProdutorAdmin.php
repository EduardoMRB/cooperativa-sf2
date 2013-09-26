<?php

namespace Cooperativa\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class ProdutorAdmin extends Admin
{
    public function configureFormFields(FormMapper $formMapper)
    {
        return $formMapper
            ->add('nome')
            ->add('cnpj', null, array('label' => 'CPF/CNPJ'))
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        return $listMapper
            ->addIdentifier('nome')
            ->addIdentifier('cnpj', null, array('label' => 'CPF/CNPJ'))
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        return $datagridMapper
            ->add('nome')
            ->add('cpnj', null, array('label' => 'CPF/CPNJ'))
        ;
    }
}