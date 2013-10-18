<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PercentualEntidadeValidator extends ConstraintValidator
{
    protected $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * Verifica se o percentual das entidades ultrapassa 100%
     * 
     * @param integer value
     * @param Constraint
     */
    public function validate($value, Constraint $constraint)
    {
        $manager = $this->doctrine->getManager()->getRepository('CooperativaAdminBundle:ContratoEntidade');
        $contratos = $manager->findBy(array('ativo' => true));
        $totalPercentual = 0;

        foreach ($contratos as $contrato) {
            $totalPercentual += $contrato->getPercentual();
        }

        if (($totalPercentual + $value) > 100) {
            $this->context->addViolation($constraint->message);
        }
    }
}