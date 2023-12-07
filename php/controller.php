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
}else{
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
}

function opcao($passo){
    if($_SESSION['user_tipo'] == 1){// opções do login de aluno
        switch ($passo) {
            case 'index':
                require("../site/gerenciamentoAluno.php");
                break;
            case 'ver_perfil':
                require("../site/perfilAluno.php");
                break;
            case 'editar_perfil':
                include('Aluno.php');
                $aluno = new Aluno();
                if($aluno->editarDadosAluno($_POST['nome'],$_POST['cpf'],$_POST['email'],$_POST['data_nasc'], $_POST['data_ing'], $_POST['senha'], $_POST['telefone'], $_POST['matricula'] ,$_POST['curso'], $_POST['periodo'] )){
                    echo "Dados alterados com sucesso!";
                }else{
                    echo "Erro ao alterar dados";
                }
                break;
            case 'ver_bolsa_id':
                include("Projeto.php");
                $projeto = new Projeto();
                $resultado = $projeto->buscaProjetoId($_POST['projeto_id']);
                $projeto_id = mysqli_fetch_array($resultado);
    
                include("Bolsa.php");
                $bolsa = new Bolsa();
                $resultado2 = $bolsa->buscaBolsaProjeto($_POST['projeto_id']);
    
                require("../site/modal_edita_projeto.php");
                break;
            case 'inscreve_aluno_projeto':
                //echo $_POST['idProjeto']." ".$_SESSION['user_login'];
                $idProjeto = $_POST['idProjeto'];
                $idAluno = $_SESSION['user_login'];
                include("Aluno.php");
                $aluno = new Aluno();
                $aluno->setMatricula($idAluno);
                $resultado = $aluno->alunoInscreve_seProjeto($idProjeto);
                if($resultado == 1){
                    echo "Inscrito com sucesso no projeto!";
                }else if($resultado == 0){
                    echo "Você já está inscrito no projeto!";
                }else{
                    echo "Erro ao inscrever!";
                }
                break;
        }
    }else if($_SESSION['user_tipo'] == 2){// opções login de professor
        switch ($passo) {
            case 'index':
                require("../site/gerenciamento.php");
                break;
            case 'ver_perfil':
                require("../site/perfilProfessor.php");
                break;
            case 'editar_perfil':
                include('Professor.php');
                $professor = new Professor();
                if($professor->editarDadosProfessor($_POST['nome'],$_POST['cpf'],$_POST['email'],$_POST['data_nasc'], $_POST['data_ing'], $_POST['senha'], $_POST['telefone'], $_POST['siape'] )){
                    echo "Dados alterados com sucesso!";
                }else{
                    echo "Erro ao alterar dados";
                }
                break;
            case 'cadastrar_projeto':
                require("../site/cadastroProjeto.php");
                break;
            case 'ver_bolsa_id':
                include("Projeto.php");
                $projeto = new Projeto();
                $resultado = $projeto->buscaProjetoId($_POST['projeto_id']);
                $projeto_id = mysqli_fetch_array($resultado);

                include("Bolsa.php");
                $bolsa = new Bolsa();
                $resultado2 = $bolsa->buscaBolsaProjeto($_POST['projeto_id']);

                require("../site/modal_edita_projeto.php");
                break;
            case 'editar_projeto_id':
                include("Projeto.php");
                $projeto = new Projeto();
                $idProjeto = $_POST['idProjeto'];
                $nomeProjeto = $_POST['nomeProjeto'];
                $tipoProjeto = $_POST['tipoProjeto'];
                $descricao = $_POST['descricao'];
                $data_inicio_processo = $_POST['data_inicio_processo'];
                $data_fim_processo = $_POST['data_fim_processo'];
                $metodoDeEntrada = $_POST['metodoDeEntrada'];
                $qtdVagas = $_POST['qtdVagas'];
                if($projeto->editaProjeto($idProjeto, $nomeProjeto, $tipoProjeto, $descricao, $data_inicio_processo, $data_fim_processo, $metodoDeEntrada, $qtdVagas)){
                    echo "Projeto editado com sucesso!";
                }else{
                    echo "Erro ao editar projeto!";
                }

                break;

        }
    }else{
        echo "erro!";
    }
}


?>