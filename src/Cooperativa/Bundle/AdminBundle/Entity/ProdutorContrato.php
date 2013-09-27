<?php

namespace Cooperativa\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="contratoprodutor")
 */
class ProdutorContrato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     * 
     * @ORM\Column(name="numero_entregas", type="integer")
     */
    protected $numeroEntregas;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="ativo", type="boolean")
     */
    protected $ativo;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="data", type="date")
     */
    protected $data;

    /**
     * @var Produtor
     * 
     * @ORM\ManyToOne(targetEntity="Produtor")
     */
    protected $produtor;

    /**
     * @param boolean $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setProdutor(Produtor $produtor)
    {
        $this->produtor = $produtor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProdutor()
    {
        return $this->contrato;
    }

    /**
     * @param \DateTime $data
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $numeroEntregas
     */
    public function setNumeroEntregas($numeroEntregas)
    {
        $this->numeroEntregas = $numeroEntregas;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumeroEntregas()
    {
        return $this->numeroEntregas;
    }
}