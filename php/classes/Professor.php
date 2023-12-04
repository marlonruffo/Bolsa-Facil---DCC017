<?php
include("Usuario.php");
class Professor extends Usuario
{
    private $SIAPE;

    function __construct($nome , $cpf = "", $email= "", $dataNasc= "", $dataIngresso= "", $senha= "", $telefone= "", $SIAPE= "") {
        parent::__construct($nome, $cpf, $email, $dataNasc, $dataIngresso, $senha, $telefone);
        $this->SIAPE = $SIAPE;
    }

    /**
     * Get the value of SIAPE
     */ 
    public function getSIAPE()
    {
        return $this->SIAPE;
    }

    /**
     * Set the value of SIAPE
     *
     * @return  self
     */ 
    public function setSIAPE($SIAPE)
    {
        $this->SIAPE = $SIAPE;

        return $this;
    }
}
?>