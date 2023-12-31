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

    public function buscaProjetosAluno(){
        include ('conecta.php');
        // $sql = "SELECT * FROM projeto WHERE DATE(data_fim_processo) > CURDATE()";
        $sql = "SELECT * FROM projeto WHERE data_fim_processo > NOW()";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado; 
    }

    public function buscaAluno($matricula){
        include ('conecta.php');
        $sql = "SELECT * FROM aluno WHERE matricula = '$matricula';";
        $resultado = mysqli_query($conexao, $sql);
        if($aluno = mysqli_fetch_array($resultado)){
            $this->nome = $aluno['nome'];
            $this->cpf = $aluno['cpf'];
            $this->email = $aluno['email'];
            $this->telefone = $aluno['telefone'];
            $this->matricula = $aluno['matricula'];
            $this->dataNasc = $aluno['dataNasc'];
            $this->dataIngresso = $aluno['dataIngresso'];
            $this->curso = $aluno['curso'];
            $this->periodo = $aluno['periodo'];
            $this->senha = $aluno['senha'];
        }
    }

    public function editarDadosAluno($nome , $cpf , $email, $dataNasc, $dataIngresso, $senha, $telefone, $matricula, $curso, $periodo){
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEmail($email);
        $this->setDataNasc($dataNasc);
        $this->setDataIngresso($dataIngresso);
        $this->setSenha($senha);
        $this->setTelefone(($telefone));
        $this->setCurso($curso);
        $this->setPeriodo($periodo);
        
        include("conecta.php");
        $sql = "UPDATE aluno SET nome= '$nome', cpf = '$cpf', email = '$email', telefone = '$telefone', dataNasc= '$dataNasc', dataIngresso = '$dataIngresso', senha = '$senha', curso = '$curso', periodo = '$periodo'  WHERE matricula = '$matricula';";
		return mysqli_query($conexao, $sql);
    }

    public function alunoInscreve_seProjeto($idProjeto){
        include ('conecta.php');
        $sql = "SELECT * FROM aluno_inscreve_se_projeto WHERE fk_Projeto_idProjeto= '$idProjeto' AND fk_Aluno_matricula = '$this->matricula';";
        $resultado = mysqli_query($conexao, $sql);
        if(mysqli_fetch_array($resultado)){
            return 0;// já existe
        }else{
            $sql = "INSERT INTO aluno_inscreve_se_projeto (fk_Aluno_matricula, fk_Projeto_idProjeto) 
			VALUES ('$this->matricula', '$idProjeto');";
            $resultado = mysqli_query($conexao, $sql);
            if($resultado){
                return 1; //deu certo
            }else{
                return -1; //deu errado
            }
        }
    }

    public function buscaProjetosInsc(){
        include ('conecta.php');
        $sql = "SELECT * FROM aluno_inscreve_se_projeto as aip INNER JOIN aluno as a INNER JOIN projeto as p ON aip.fk_Aluno_matricula = a.matricula AND aip.fk_Projeto_idProjeto = p.idProjeto  WHERE aip.fk_Aluno_matricula = '$this->matricula';";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }
}
?>