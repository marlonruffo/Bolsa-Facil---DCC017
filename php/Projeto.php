<?php
class Projeto
{
    private $nomeProjeto;
    private $tipo;
    private $metodoDeEntrada;
    private $qtdVagas;
    private $descricao;
    private $preRequisitos;
    

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

    public function adicionaProjeto ($nomeProjeto , $tipoProjeto , $descricao, $data_inicio_processo, $data_fim_processo,  $metodoDeEntrada, $qtdVagas, $e_voluntaria, $valor, $preRequisitos, $siapeProfessor){
        include("conecta.php");
        include("Bolsa.php");
        $sql = "INSERT INTO projeto (nomeProjeto, tipoProjeto, metodoDeEntrada, qtdVagas , descricao, fk_Professor_siape, data_inicio_processo, data_fim_processo, pre_requisito) 
			VALUES ('$nomeProjeto', '$tipoProjeto' ,'$metodoDeEntrada','$qtdVagas','$descricao','$siapeProfessor','$data_inicio_processo', '$data_fim_processo' , '$preRequisitos');";
            if(mysqli_query($conexao, $sql)){
                $id_projeto = mysqli_insert_id($conexao);
                for($i = 1; $i <= $qtdVagas; $i++){
                    $bolsa = new bolsa();
                    $bolsa->cadastraBolsa($valor[$i], $e_voluntaria[$i], $id_projeto);
                }
                return true;
            }else {
                return false;
            }
    }

    public function buscaProjetoId($idProjeto){
        include ('conecta.php');
        $sql = "SELECT * FROM projeto WHERE idProjeto = '$idProjeto';";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    public function editaProjeto ($idProjeto, $nomeProjeto , $tipoProjeto , $descricao, $data_inicio_processo, $data_fim_processo,  $metodoDeEntrada, $qtdVagas, $preRequisitos){
        include("conecta.php");
        $sql = "UPDATE projeto SET nomeProjeto= '$nomeProjeto', pre_requisito = '$preRequisitos', tipoProjeto = '$tipoProjeto', metodoDeEntrada = '$metodoDeEntrada', qtdVagas = '$qtdVagas', descricao= '$descricao', data_inicio_processo = '$data_inicio_processo', data_fim_processo = '$data_fim_processo'  WHERE idProjeto = '$idProjeto';";
		return mysqli_query($conexao, $sql);
    }

    public function buscaAlunosProjeto($idProjeto){
        include ('conecta.php');
        $sql = "SELECT *FROM aluno_inscreve_se_projeto AS aip INNER JOIN aluno a INNER JOIN projeto p ON aip.fk_Aluno_matricula = a.matricula AND aip.fk_Projeto_idProjeto = p.idProjeto WHERE aip.fk_Projeto_idProjeto = '$idProjeto'; ";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }


    /**
     * Get the value of preRequisitos
     */ 
    public function getPreRequisitos()
    {
        return $this->preRequisitos;
    }

    /**
     * Set the value of preRequisitos
     *
     * @return  self
     */ 
    public function setPreRequisitos($preRequisitos)
    {
        $this->preRequisitos = $preRequisitos;

        return $this;
    }
}
?>