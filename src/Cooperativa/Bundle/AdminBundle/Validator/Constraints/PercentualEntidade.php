<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class PercentualEntidade extends Constraint
{
    // Em caso de erro de validação, é apresentada essa mensagem
    public $message = 'Os percentuais de entidade cadastrados não podem exceder 100%';

    public function validateBy()
    {
        return 'entidade_percentual';
    }
}