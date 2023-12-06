<?php
class Bolsa
{
    private $valor;
    private $e_voluntaria;

    function __construct($valor = "", $e_voluntaria= "") {
        $this->valor = $valor;
        $this->e_voluntaria = $e_voluntaria;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of e_voluntaria
     */ 
    public function getE_voluntaria()
    {
        return $this->e_voluntaria;
    }

    /**
     * Set the value of e_voluntaria
     *
     * @return  self
     */ 
    public function setE_voluntaria($e_voluntaria)
    {
        $this->e_voluntaria = $e_voluntaria;

        return $this;
    }

    public function cadastraBolsa($valor, $e_voluntaria, $id_projeto){
        include("conecta.php");
        $sql = "INSERT INTO bolsa (valor, e_voluntaria, fk_Projeto_idProjeto) 
			VALUES ('$valor', '$e_voluntaria' ,'$id_projeto');";
            $resultado = mysqli_query($conexao, $sql);
            return $resultado;
    }
}
?>