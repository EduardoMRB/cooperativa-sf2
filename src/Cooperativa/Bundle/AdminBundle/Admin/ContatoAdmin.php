<?php

namespace Cooperativa\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;


class ContatoAdmin extends Admin
{
    public function configureFormFields(FormMapper $form) 
    {
        return $form
            ->add('endereco')
            ->add('telefone')
            ->add('email');
    }
    
    public function configureListFields(ListMapper $list) 
    {
        return $list
            ->add('endereco')
            ->add('telefone')
            ->add('email');
    }
    
    public function configureDatagridFilters(DatagridMapper $filter)
    {
        return $filter
            ->add('endereco')
            ->add('telefone')
            ->add('email');
    }
    
}
