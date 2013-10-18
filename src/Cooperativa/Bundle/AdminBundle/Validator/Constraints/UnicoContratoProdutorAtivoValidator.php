<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UnicoContratoProdutorAtivoValidator extends ConstraintValidator
{
    protected $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function validate($contratoProdutor, Constraint $constraint)
    {
        $manager = $this->doctrine->getManager()->getRepository('CooperativaAdminBundle:ProdutorContrato');

        // Verifica se existe outro contrato ativo para mesmo produtor
        if ($contratoProdutor->getAtivo()) {
            $contratosAtivos = $manager->findBy(array(
                'ativo' => true,
                'produtor' => $contratoProdutor->getProdutor(),
            ));
        }
        
        // Se existir, manda um erro de validacao para o campo "ativo"
        if ($contratosAtivos) {
            $this->context->addViolationAt('ativo', $constraint->message);
        }
    }
}