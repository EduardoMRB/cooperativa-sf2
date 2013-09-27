<?php

namespace Cooperativa\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagamento
 *
 * @ORM\Table(name="pagamento")
 * @ORM\Entity
 */
class Pagamento
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
     * @ORM\Column(name="valor", type="float")
     */
    private $valor;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="data", type="date")
     */
    private $data;

    /**
     * @var Produtor
     * 
     * @ORM\ManyToOne(targetEntity="Produtor")
     */
    private $produtor;


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
     * Set valor
     *
     * @param float $valor
     * @return Pagamento
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }

    public function setData(\DateTime $data)
    {
        $this->data = $data;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setProdutor(Produtor $produtor)
    {
        $this->produtor = $produtor;

        return $this;
    }

    public function getProdutor()
    {
        return $this->produtor;
    }
}
