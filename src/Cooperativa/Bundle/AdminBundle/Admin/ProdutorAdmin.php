<?php

namespace Cooperativa\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Cooperativa\Bundle\AdminBundle\Form\ContatoType;

class ProdutorAdmin extends Admin
{
    public function configureFormFields(FormMapper $formMapper)
    {
        return $formMapper
            ->add('nome')
            ->add('cnpj', null, array('label' => 'CPF/CNPJ'))
            ->add('contato', 'sonata_type_model_list')
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
            ->add('cnpj', null, array('label' => 'CPF/CPNJ'))
        ;
    }
}