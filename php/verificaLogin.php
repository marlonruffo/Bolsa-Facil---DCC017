<?php

	session_start(); 
	require("mdl_login.php");
	include ("conecta.php");
	
	if(isset($_GET['logout']) && $_GET['logout'] == "logout" && isset($_SESSION['user_login'])) {
		setcookie("usuarioLogado","",time()-3600);
		unset($_SESSION['user_login']);
		unset($_SESSION['user_nome']);
		unset($_SESSION['user_tipo']);
		header("Location: ../site/");
	}

	if(isset($_GET['logout']) && $_GET['logout'] == "logout" && !(isset($_SESSION['user_login']))) {
		header("Location: ../site/");
	}
	
	if(isset($_POST['user']) && isset($_POST['senha']) && $_POST['user'] != "" && $_POST['senha'] != ""){
		$login = mysqli_real_escape_string($conexao, $_POST["user"]);
		$senha = mysqli_real_escape_string($conexao, $_POST["senha"]);

        $alunos = busca_usuarios_alunos();
        while($linha = mysqli_fetch_array($alunos)){// buscando por todos os alunos
            if($linha['matricula'] == $login){ // verificando se o aluno do banco é igual a matricula informada
                if($linha['senha'] == $senha){ // verificando a senha
                    //se estiver batendo matricula e senha com aluno
                    $_SESSION['user_login'] = $linha['matricula'];
                    $_SESSION['user_nome'] = $linha['nome'];
                    $_SESSION['user_tipo'] = "1"; // aluno
                    echo "1"; //aluno e correto
                    return;
                }else{
                    echo "0"; //senha incorreta 
                    return;
                }
            }
        }

        $professores = busca_usuarios_professores();
        while($linha = mysqli_fetch_array($professores)){// buscando por todos os professores
            if($linha['siape'] == $login){ // verificando se o professor do banco é igual ao siape informado
                if($linha['senha'] == $senha){ // verificando a senha
                    //se estiver batendo matricula e senha com professor
                    $_SESSION['user_login'] = $linha['siape'];
                    $_SESSION['user_nome'] = $linha['nome'];
                    $_SESSION['user_tipo'] = "2"; // professor
                    echo "2"; //professor e correto
                    return;
                }else{
                    echo "0"; //senha incorreta 
                    return;
                }
            }
        }

        //se n tiver encontrado a matricula retorna -1
        echo "-1";
        return;
	}
	//header("Location: ../site/");
	//echo -1;