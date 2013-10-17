<?php

namespace Cooperativa\Bundle\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;

class UnicoContratoProdutorAtivoValidator extends ConstraintValidator
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function validate($contratoProdutor, Constraint $constraint)
    {
        $manager = $this->em->getRepository('CooperativaAdminBundle:ProdutorContrato');

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