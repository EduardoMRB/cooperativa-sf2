<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;

class PercentualEntidadeValidator extends ConstraintValidator
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function validate($value, Constraint $constraint)
    {
        $manager = $this->em->getRepository('CooperativaAdminBundle:ContratoEntidade');
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