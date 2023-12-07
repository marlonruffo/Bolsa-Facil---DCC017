<?php
    session_start();
	include("Professor.php");
	
    if(isset($_POST)){
        $preRequisitos = $_POST['preRequisitos'];
        $nomeProjeto = $_POST['nomeProjeto'];
        $tipoProjeto = $_POST['tipoProjeto'];
        $descricao = $_POST['descricao'];
        $data_inicio_processo = $_POST['data_inicio_processo'];
        $data_fim_processo = $_POST['data_fim_processo'];
        $metodoDeEntrada = $_POST['metodoDeEntrada'];
        $qtdVagas = $_POST['qtdVagas'];

        for($i=1; $i<=$qtdVagas;$i++){
			$e_voluntaria[$i] = $_POST["e_voluntaria".$i];
			$valor[$i] = $_POST["valor".$i];
		}

        $professor = new Professor();
        $professor->setSIAPE($_SESSION['user_login']);

        echo $professor->ProfessorCadastraProjeto($nomeProjeto, $tipoProjeto, $descricao, $data_inicio_processo, $data_fim_processo, $metodoDeEntrada, $qtdVagas, $e_voluntaria, $valor, $preRequisitos);


    }
	/*if(isset($_POST)){
		$cli_id = mysqli_real_escape_string($conexao, trim(utf8_decode($_POST['cli_id'])));
		$num_campos = $_POST["x"];
		
		for($i=1; $i<=$num_campos;$i++){
			$pac_quantidade[$i] = $_POST["pac_quantidade".$i];
		}
		
		$proced_quantidade = count($_POST['proced_id']);
		$proced_id_str = implode(",", $_POST['proced_id']);
		$proced_id = explode(',', $proced_id_str);
		$nome_proceds = '';

		for($i=1; $i<$proced_quantidade;$i++){
			$sep = " ";
			if($i!=($proced_quantidade-1))
				$sep = " / ";

			$nome_proceds .= mysqli_fetch_array(busca_proced_id($proced_id[$i]))['proced_nome'].$sep;
		}
		
		$pac_valor = mysqli_real_escape_string($conexao, trim(utf8_decode($_POST['pac_valor'])));
		$pac_valor = str_replace('.','',$pac_valor);
		$pac_valor = str_replace(',','.',$pac_valor);
		
		
		// if(($proced_quantidade-1)!=$num_campos){
		// 	echo utf8_decode("Erro: Total de procedimentos não coincide com o total de sessões.");
		// } else {
			if(adiciona_pacote($cli_id, $pac_valor, $nome_proceds)){
				$ultimo_pacote = mysqli_fetch_array(ultimo_pacote())[0];
				$descricao = 'Pacote: '.$nome_proceds;
				if(adiciona_receita_unidade($descricao, $cli_id, $pac_valor, date('Y-m-d'), $_SESSION['fun_unidade'], 'null', $ultimo_pacote)){
				}else
					echo "Erro: ".mysqli_error($conexao);
				for($i=1; $i<$proced_quantidade; $i++){
					if(adiciona_pac_has_proced($ultimo_pacote, $proced_id[$i], $pac_quantidade[$i])){
					}else
						echo "Erro: ".mysqli_error($conexao);
				}
				echo "Pacote cadastrado com sucesso!";
			}else
				echo "Erro: ".mysqli_error($conexao);
		// }

	}*/
?>
