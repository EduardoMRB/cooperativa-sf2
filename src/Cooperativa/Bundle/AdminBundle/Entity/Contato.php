<?php

namespace Cooperativa\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="contato")
 */
class Contato 
{
    /**
     * @ORM\Column(name="id", type="integer") 
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="endereco", type="string", length=255)
     */
    protected $endereco;
    
    /**
     * @ORM\Column(name="telefone", type="string", length=20)
     */
    protected $telefone;
    
    /**
     * @ORM\Column(name="email", type="string", length=60)
     */
    protected $email;
    
    
    public function getId() {
        return $this->id;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function __toString()
    {
        return $this->email . ' - ' . $this->telefone;
    }    
}