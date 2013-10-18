<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UnicoContratoEntidadeAtivoValidator extends ConstraintValidator
{
    protected $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function validate($contratoEntidade, Constraint $constraint)
    {
        $manager = $this->doctrine->getManager()->getRepository('CooperativaAdminBundle:ContratoEntidade');

        // Verifica se existe outro contrato ativo para mesma entidade
        if ($contratoEntidade->getAtivo()) {
            $contratosAtivos = $manager->findBy(array(
                'ativo' => true,
                'entidade' => $contratoEntidade->getEntidade(),
            ));
        }

        // Se existir, manda um erro de validacao para o campo "ativo"
        if ($contratosAtivos) {
            $this->context->addViolationAt('ativo', $constraint->message);
        }
    }
}