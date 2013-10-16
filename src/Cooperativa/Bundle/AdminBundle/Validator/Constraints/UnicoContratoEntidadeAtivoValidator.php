<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;

class UnicoContratoEntidadeAtivoValidator extends ConstraintValidator
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function validate($contratoEntidade, Constraint $constraint)
    {
        $manager = $this->em->getRepository('CooperativaAdminBundle:ContratoEntidade');

        if ($contratoEntidade->getAtivo()) {
            $contratosAtivos = $manager->findBy(array(
                'ativo' => true,
                'entidade' => $contratoEntidade->getEntidade(),
            ));
        }

        if ($contratosAtivos) {
            $this->context->addViolationAt('ativo', $constraint->message);
        }
    }
}