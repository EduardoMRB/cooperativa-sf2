<?php

namespace Cooperativa\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estoque
 *
 * @ORM\Table(name="estoque")
 * @ORM\Entity
 */
class Estoque
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
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer")
     */
    private $quantidade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entregue", type="boolean")
     */
    private $entregue;

    /**
     * @ORM\ManyToOne(targetEntity="Produtor")
     */
    private $produtor;

    /**
     * @ORM\ManyToOne(targetEntity="Produto")
     */
    private $produto;


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
     * Set quantidade
     *
     * @param integer $quantidade
     * @return Estoque
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer 
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set entregue
     *
     * @param boolean $entregue
     * @return Estoque
     */
    public function setEntregue($entregue)
    {
        $this->entregue = $entregue;

        return $this;
    }

    /**
     * Get entregue
     *
     * @return boolean 
     */
    public function getEntregue()
    {
        return $this->entregue;
    }

    public function setProduto(Produto $produto)
    {
    	$this->produto = $produto;

    	return $this;
    }

    public function getProduto()
    {
    	return $this->produto;
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
