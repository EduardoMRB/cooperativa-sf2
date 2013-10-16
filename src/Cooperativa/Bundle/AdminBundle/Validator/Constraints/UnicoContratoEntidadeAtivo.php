<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UnicoContratoEntidadeAtivo extends Constraint
{
    public $message = 'Já existe um contrato ativo para esta entidade';

    public function validatedBy()
    {
        return 'unico_contrato_entidade_ativo';
    }

    public function getTargets()
    {
        return Constraint::CLASS_CONSTRAINT;
    }
}