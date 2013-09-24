<?php

namespace Cooperativa\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ContratoEntidade
 *
 * @ORM\Table(name="contratoentidade")
 * @ORM\Entity
 */
class ContratoEntidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="percentual", type="float")
     */
    private $percentual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ativo", type="boolean")
     */
    private $ativo;

    /**
     * @ORM\ManyToMany(targetEntity="Entidade")
     */
    private $contratos;

    public function __construct()
    {
        $this->contratos = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set percentual
     *
     * @param float $percentual
     * @return ContratoEntidade
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;

        return $this;
    }

    /**
     * Get percentual
     *
     * @return float 
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * Set ativo
     *
     * @param boolean $ativo
     * @return ContratoEntidade
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return boolean 
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    public function addContratos($contrato)
    {
        $this->contratos->add($contrato);
    }

    public function removeContratos($contrato)
    {
        $this->contratos->removeElement($contrato);
    }

    public function getContratos()
    {
        return $this->contratos;
    }
}
