<?php

namespace Cooperativa\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class EstoqueAdmin extends Admin
{
    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('quantidade')
            ->add('entregue')
            ->add('produtor', 'sonata_type_model_list')
            ->add('produto', 'sonata_type_model_list')
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('produto')
            ->add('produtor')
            ->add('entregue', null, array(
                'editable' => true,
            ))
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('produto')
            ->add('produtor')
            ->add('entregue', null, array(
                'editable' => true,
            ))
        ;
    }
}