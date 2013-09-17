<?php

namespace Cooperativa\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

/**
 * Class ProductAdmin
 * @package Cooperativa\Bundle\AdminBundle\Admin
 *
 * Classe para definir campos, grid e filtros para produtos no painel administrativo
 */
class ProdutoAdmin extends Admin
{
    /**
     * Configura campos do formulário de cadastro e edição de produtos
     *
     * @param FormMapper $formMapper
     * @return FormMapper|void
     */
    public function configureFormFields(FormMapper $formMapper)
    {
        return $formMapper
            ->add('nome')
            ->add('valorKg')
        ;
    }

    /**
     * Configura campos da grid de exibição
     *
     * @param ListMapper $listMapper
     * @return ListMapper|void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        return $listMapper
            ->addIdentifier('nome')
            ->add('valorKg')
        ;
    }

    /**
     * Configura filtros
     *
     * @param DatagridMapper $filter
     * @return DatagridMapper|void
     */
    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        return $filter
            ->add('nome')
            ->add('valorKg')
        ;
    }
}