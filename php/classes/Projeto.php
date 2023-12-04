<?php
class Projeto
{
    private $nomeProjeto;
    private $tipo;
    private $metodoDeEntrada;
    private $qtdVagas;
    private $descricao;
    

    function __construct($nomeProjeto= "", $tipo= "", $metodoDeEntrada= "", $qtdVagas= "", $descricao= "") {
        $this->nomeProjeto = $nomeProjeto;
        $this->tipo = $tipo;
        $this->metodoDeEntrada = $metodoDeEntrada;
        $this->qtdVagas = $qtdVagas;
        $this->descricao = $descricao;
    }

    /**
     * Get the value of nomeProjeto
     */ 
    public function getNomeProjeto()
    {
        return $this->nomeProjeto;
    }

    /**
     * Set the value of nomeProjeto
     *
     * @return  self
     */ 
    public function setNomeProjeto($nomeProjeto)
    {
        $this->nomeProjeto = $nomeProjeto;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of metodoDeEntrada
     */ 
    public function getMetodoDeEntrada()
    {
        return $this->metodoDeEntrada;
    }

    /**
     * Set the value of metodoDeEntrada
     *
     * @return  self
     */ 
    public function setMetodoDeEntrada($metodoDeEntrada)
    {
        $this->metodoDeEntrada = $metodoDeEntrada;

        return $this;
    }

    /**
     * Get the value of qtdVagas
     */ 
    public function getQtdVagas()
    {
        return $this->qtdVagas;
    }

    /**
     * Set the value of qtdVagas
     *
     * @return  self
     */ 
    public function setQtdVagas($qtdVagas)
    {
        $this->qtdVagas = $qtdVagas;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
}
?>