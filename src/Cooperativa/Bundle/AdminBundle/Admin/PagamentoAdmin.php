<?php

namespace Cooperativa\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class PagamentoAdmin extends Admin
{
    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('valor')
            ->add('data')
            ->add('produtor', 'sonata_type_model_list')
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('valor')
            ->add('data')
            ->add('produtor')
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('valor')
            ->add('data')
            ->add('produtor')
        ;
    }
}