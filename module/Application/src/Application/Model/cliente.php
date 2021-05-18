<?php

namespace Application\Model;

class cliente
{
    private $Nome;
    private $Sobrenome;
    private $email;

    /**
     * Nome
     */

    public function setNome($Nome)
    {
        $this->Nome = $Nome;
        return $this;

    }
    public function getNome($Nome)
    {
        return $this->Nome;
        
    }

    /**
     * SobreNome
     */

    public function setSobrenome($Sobrenome)
    {
        $this->Sobrenome = $Sobrenome;
        return $this;

    }
    public function getSobrenome($Sobrenome)
    {
        return $this->Sobrenome;
        
    }

    /**
     * Email
     */

    public function setemail($email)
    {
        $this->email = $email;
        return $this;

    }
    public function getemail($email)
    {
        return $this->email;
        
    }

    public function exchangeArray($data)
    {
        $this->setNome($data['Nome'])
        ->setSobrenome($data['Sobrenome'])
        ->setemail($data['Email']);
    }

}