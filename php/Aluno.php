<?php
include("Usuario.php");
class Aluno extends Usuario
{
    private $matricula;
    private $curso;
    private $periodo;

    function __construct($nome= "" , $cpf = "", $email= "", $dataNasc= "", $dataIngresso= "", $senha= "", $telefone= "", $matricula= "") {
        parent::__construct($nome, $cpf, $email, $dataNasc, $dataIngresso, $senha, $telefone);
        $this->matricula = $matricula;
    }
    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }
    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of periodo
     */ 
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set the value of periodo
     *
     * @return  self
     */ 
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    public function verificaSeAlunoJaExiste(){
        include ('conecta.php');
        $sql = "SELECT * FROM aluno WHERE matricula = '$this->matricula';";
            $resultado = mysqli_query($conexao, $sql);
            return $resultado; 
    }

    public function cadastraAluno(){
        include ('conecta.php');
        $sql = "INSERT INTO aluno (matricula, cpf, email, dataNasc , nome, senha, telefone) 
			VALUES ('$this->matricula', '$this->cpf' ,'$this->email','$this->dataNasc','$this->nome','$this->senha','$this->telefone');";
            $resultado = mysqli_query($conexao, $sql);
            return $resultado; 
    }
}
?>