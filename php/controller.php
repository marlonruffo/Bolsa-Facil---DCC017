<?php
session_start();
//$_SESSION['user_tipo'] == "1" é aluno e 2 é professor

if (isset($_GET['cadastro'])) {//fazer cadastro de usuario
    //verificar se é aluno ou professor ou senao existe no sistema
    include('mdl_cadastro.php');
    $nome= $_POST['nome'];
    $matricula= $_POST['matricula'];
    $email= $_POST['email'];
    $cpf= $_POST['cpf'];
    $data_nasc= $_POST['data_nasc'];
    $telefone= $_POST['telefone'];
    $senha= $_POST['senha'];
    $confirmarSenha= $_POST['confirmarSenha'];

    $existe_tipo = verificaMatriculaUsuario($matricula); // retorna 0 para nao existe, 1 para aluno e 2 para professor

    if($existe_tipo == 0){
        echo "Matricula informada não foi encontrada no sistema da universidade";
    }else if($existe_tipo == 1){
        include('Aluno.php');
        $aluno = new Aluno($nome, $cpf, $email, $data_nasc, "", $senha, $telefone, $matricula);

        if($alunoExiste = mysqli_fetch_array($aluno->verificaSeAlunoJaExiste())){
            echo "Esse aluno já está cadastrado no sistema!";
        }else{
            if($aluno->cadastraAluno()){
                echo "Aluno cadastrado com sucesso!";
            }else{
                echo "Falha ao realizar cadastro, tente novamente!";
            }
        }
    }else{
        include('Professor.php');
        $professor = new Professor($nome, $cpf, $email, $data_nasc, "", $senha, $telefone, $matricula);

        if($professorExiste = mysqli_fetch_array($professor->verificaSeProfessorJaExiste())){
            echo "Esse professor já está cadastrado no sistema!";
        }else{
            if($professor->cadastraProfessor()){
                echo "Professor cadastrado com sucesso!";
            }else{
                echo "Falha ao realizar cadastro, tente novamente!";
            }
        }
    }
}

$aux = 0;
if (isset($_GET['p'])) {
	$passo = $_GET['p'];
	$aux = 1;
}

if (isset($_SESSION['user_login']) && isset($_SESSION['user_nome']) && isset($_SESSION['user_tipo']) && $aux==1){
    opcao($passo);
}else{
    require("../site/login.php");
}

function opcao($passo){
    if($_SESSION['user_tipo'] == 1){// opções do login de aluno
        switch ($passo) {
			case 'index':
                require("../site/bolsas.php");
                break;
        }
    }else if($_SESSION['user_tipo'] == 2){// opções login de professor
        switch ($passo) {
			case 'index':
                require("../site/gerenciamento.php");
                break;
        }
    }else{
        echo "erro!";
    }
}


?>