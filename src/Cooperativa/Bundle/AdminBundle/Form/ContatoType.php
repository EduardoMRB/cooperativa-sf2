<?php

namespace Cooperativa\Bundle\AdminBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContatoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('endereco')
            ->add('telefone')
            ->add('email')
        ;
    }

    /**
     * Adiciona entidade responsavel pelo formulario
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cooperativa\Bundle\AdminBundle\Entity\Contato',
        ));
    }

    /**
     * Identifica formulario com um nome
     */
    public function getName()
    {
        return 'cooperativa_form_contato';
    }
}