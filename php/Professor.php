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

    public function buscaProfessor($SIAPE){
        include ('conecta.php');
        $sql = "SELECT * FROM professor WHERE siape = '$SIAPE';";
        $resultado = mysqli_query($conexao, $sql);
        if($prof = mysqli_fetch_array($resultado)){
            $this->nome = $prof['nome'];
            $this->cpf = $prof['cpf'];
            $this->email = $prof['email'];
            $this->telefone = $prof['telefone'];
            $this->SIAPE = $prof['siape'];
            $this->dataNasc = $prof['dataNasc'];
            $this->dataIngresso = $prof['dataIngresso'];
            $this->senha = $prof['senha'];
        }
    }

    public function editarDadosProfessor($nome , $cpf , $email, $dataNasc, $dataIngresso, $senha, $telefone, $SIAPE){
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEmail($email);
        $this->setDataNasc($dataNasc);
        $this->setDataIngresso($dataIngresso);
        $this->setSenha($senha);
        $this->setTelefone(($telefone));
        
        include("conecta.php");
        $sql = "UPDATE professor SET nome= '$nome', cpf = '$cpf', email = '$email', telefone = '$telefone', dataNasc= '$dataNasc', dataIngresso = '$dataIngresso', senha = '$senha'  WHERE siape = '$SIAPE';";
		return mysqli_query($conexao, $sql);
    }

    public function ProfessorCadastraProjeto($nomeProjeto , $tipoProjeto , $descricao, $data_inicio_processo, $data_fim_processo,  $metodoDeEntrada, $qtdVagas, $e_voluntaria, $valor, $preRequisitos){
        include("Projeto.php");
        $projeto = new Projeto();
        if($projeto->adicionaProjeto($nomeProjeto , $tipoProjeto , $descricao, $data_inicio_processo, $data_fim_processo,  $metodoDeEntrada, $qtdVagas, $e_voluntaria, $valor, $preRequisitos, $this->SIAPE)){
            echo "Projeto cadastrado com sucesso!";
        }else{
            echo "Erro ao cadastrar projeto!";
        }

        //return $projeto->adicionaProjeto($nomeProjeto , $tipoProjeto , $descricao, $data_inicio_processo, $data_fim_processo,  $metodoDeEntrada, $qtdVagas, $e_voluntaria, $valor, $this->SIAPE);
    }
    public function buscaAlunosInscritos($idProjeto){
        include ('conecta.php');
        $sql = "SELECT * FROM aluno WHERE matricula IN (SELECT fk_Aluno_matricula FROM aluno_projeto WHERE fk_Projeto_idProjeto = '$idProjeto');";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
        
    }
    public function buscaProjetosProf(){
        include ('conecta.php');
        $sql = "SELECT * FROM projeto WHERE fk_Professor_siape = '$this->SIAPE';";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }
    
    /*public function ProfessorCadastraPRequisito($requisitos)
    {
        include("conecta.php");
    
        $sql = "INSERT INTO prerequisito (Descricao, fk_Professor_siape) VALUES (?, ?);";
        $resultado = mysqli_prepare($conexao, $sql);
    
        if (!$resultado) {
            return "Erro ao preparar a declaração SQL: " . mysqli_error($conexao);
        }
    
        foreach ($requisitos as $requisito) {
            mysqli_stmt_bind_param($resultado, "ss", $requisito, $this->SIAPE);
            $result = mysqli_stmt_execute($resultado);
    
            if (!$result) {
                return "Erro ao cadastrar pré-requisito: " . mysqli_stmt_error($resultado);
            }
        }
        mysqli_stmt_close($resultado);
    
        return "Pré-requisitos cadastrados com sucesso!";
    }*/
     

}
?>