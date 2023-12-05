<?php
	require_once("conecta.php");
	if(!isset($_SESSION))
		session_start();

    function verificaMatriculaUsuario($matricula){
        //retorna 0 senao existe, 1 se é aluno e 2 se é professor
        include ('conecta.php');
        $result = "SELECT * FROM alunos_ufjf WHERE matricula = '$matricula'";
        $resultado = mysqli_query($conexao, $result);
        if($dados = mysqli_fetch_array($resultado)){
            return 1;
        }

        $result = "SELECT * FROM professores_ufjf WHERE matricula = '$matricula' ";
        $resultado = mysqli_query($conexao, $result);
        if($dados = mysqli_fetch_array($resultado)){
            return 2;
        }

        return 0;
    }


?>