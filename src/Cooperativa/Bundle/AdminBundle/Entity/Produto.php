<?php

namespace Cooperativa\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="produto")
 */
class Produto
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nome;

    /**
     * @ORM\Column(type="float")
     */
    protected $valorKg;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $valorKg
     */
    public function setValorKg($valorKg)
    {
        $this->valorKg = $valorKg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorKg()
    {
        return $this->valorKg;
    }

    public function __toString()
    {
        return $this->getNome();
    }
}