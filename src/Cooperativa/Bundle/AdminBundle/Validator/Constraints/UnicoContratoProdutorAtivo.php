<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UnicoContratoProdutorAtivo extends Constraint
{
    public $message = 'Já existe um contrato ativo para esse produtor';

    public function validatedBy()
    {
        return 'unico_contrato_produtor_ativo';
    }

    public function getTargets()
    {
        return Constraint::CLASS_CONSTRAINT;
    }
}