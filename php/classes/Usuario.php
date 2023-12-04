<?php
abstract class Usuario
{
    private $nome;
    private $cpf;
    private $email;
    private $dataNasc;
    private $dataIngresso;
    private $senha;
    private $telefone;

    function __construct($nome = "", $cpf = "", $email= "", $dataNasc= "", $dataIngresso= "", $senha= "", $telefone= "") {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->dataNasc = $dataNasc;
        $this->dataIngresso = $dataIngresso;
        $this->senha = $senha;
        $this->telefone = $telefone;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of dataNasc
     */ 
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    /**
     * Set the value of dataNasc
     *
     * @return  self
     */ 
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;

        return $this;
    }

    /**
     * Get the value of dataIngresso
     */ 
    public function getDataIngresso()
    {
        return $this->dataIngresso;
    }

    /**
     * Set the value of dataIngresso
     *
     * @return  self
     */ 
    public function setDataIngresso($dataIngresso)
    {
        $this->dataIngresso = $dataIngresso;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}
?>