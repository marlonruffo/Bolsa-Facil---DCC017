<?php
include("Usuario.php");
class Professor extends Usuario
{
    private $SIAPE;

    function __construct($nome= "" , $cpf = "", $email= "", $dataNasc= "", $dataIngresso= "", $senha= "", $telefone= "", $SIAPE= "") {
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

    public function verificaSeProfessorJaExiste(){
        include ('conecta.php');
        $sql = "SELECT * FROM professor WHERE siape = '$this->SIAPE';";
            $resultado = mysqli_query($conexao, $sql);
            return $resultado; 
    }

    public function cadastraProfessor(){
        include ('conecta.php');
        $sql = "INSERT INTO professor (siape, cpf, email, dataNasc , nome, senha, telefone) 
			VALUES ('$this->SIAPE', '$this->cpf' ,'$this->email','$this->dataNasc','$this->nome','$this->senha','$this->telefone');";
            $resultado = mysqli_query($conexao, $sql);
            return $resultado; 
    }
}
?>