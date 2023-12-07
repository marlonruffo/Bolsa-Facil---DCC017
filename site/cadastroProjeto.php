<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
	<link rel="stylesheet" href="../css/cadastroBolsaNova.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.css"/>

</head>
<body>
<?php include('navbar.php'); ?>
	<div class="container mt-5">
		<h2>Criação de Projeto</h2>
		<form method="POST" id="frmCadProjeto" name="frmCadProjeto">
			<div class="form-group">
				<label class="labelForms" for="nomeProjeto">Título do Projeto:</label>
				<input type="text" class="form-control formss" id="nomeProjeto" name="nomeProjeto" placeholder="Digite o título do projeto">
			</div>
			<div class="form-group ">
				<label class="labelForms">Tipo de Projeto</label>
				<select class="form-control formss" name="tipoProjeto" id="tipoProjeto">
					<option value="" selected="selected">Selecione o tipo de projeto</option>
					<option value="Iniciação Científica">Iniciação Científica</option>
					<option value="Treinamento Profissional">Treinamento Profissional</option>
					<option value="Monitoria">Monitoria</option>
					<option value="Extensão">Extensão</option>
				</select>
			</div>
			<div class="form-group">
				<label class="labelForms" for="descricao">Descrição:</label>
				<textarea type="text" class="form-control formss" id="descricao" name="descricao" placeholder="Escreva os detalhes do projeto."></textarea>
			</div>
			<div class="form-group">
				<label class="labelForms" for="descricao">Pré-Requisitos:</label>
				<textarea type="text" class="form-control formss" id="preRequisitos" name="preRequisitos" placeholder="Escreva os pré-requisitos do projeto."></textarea>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="labelForms" for="vagaRemunerada">Início processo seletivo:</label>
                    <div class='input-group'>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' id="data_inicio_processo" name="data_inicio_processo" placeholder="XX/XX/XXXX" class="form-control"/>
                	</div>
                </div>
                <div class="form-group col-md-6">
					<label class="labelForms" for="vagaRemunerada">Fim processo seletivo:</label>
                    <div class='input-group'>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' id="data_fim_processo" name="data_fim_processo" placeholder="XX/XX/XXXX" class="form-control"/>
                	</div>
                </div>
				<div class="form-group col-md-6">
					<label class="labelForms" for="metodoDeEntrada">Método de entrada:</label>
					<input type="text" class="form-control formss" id="metodoDeEntrada" name="metodoDeEntrada" placeholder="Digite o médtodo de entrada">
				</div>
				<div class="form-group col-md-6">
					<label class="labelForms" for="nomeProjeto">Quantidade de vagas:</label>
					<input type="number" class="form-control formss" id="qtdVagas" name="qtdVagas" onchange="adicionarCampos(this)">
				</div>

				<!--<div class="input_fields_wrap"></div>-->
				<!--<div class="form-group col-md-6">
					<label class="labelForms" for="preRequisito">Pré Requisito:</label>
					<input type="text" class="form-control formss" id="inputField4">
				</div>-->
			</div>

			<div class="form-row input_fields_wrap" id="adicionaCampos">

			</div>
			<div class="form-group">
				<!-- Fechamento da tag form -->
				<button type="button" class="btn btn-primary botaoCriar  " onclick="cadastrarProjeto()">Cadastrar </button>
			</div>
		</form>
	</div>
	
		 
    <!-- js placed at the end of the document so the pages load faster -->
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/jquery.maskedinput.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
		<script src="../assets/js/jquery.scrollTo.min.js"></script>
		<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>

		<!--common script for all pages-->
		<script src="../assets/js/common-scripts.js"></script>

		<!--script for this page-->
		<script type="text/javascript" src="../assets/js/moment.js"></script>
		<script src="../assets/js/locale/pt-br.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.js"></script>
        <script src="../js/cadProjeto.js" type="text/javascript"></script>
        <script src="../js/Validacoes.js" type="text/javascript"></script>
		<script>
			$(document).ready(function(){		
				//alert("teste");
				$("#data_inicio_processo").mask("99/99/9999");
				$('#data_inicio_processo').datetimepicker({
					locale: 'pt_br',
					format: 'L'
				});

				$("#data_fim_processo").mask("99/99/9999");
				$('#data_fim_processo').datetimepicker({
					locale: 'pt_br',
					format: 'L'
				});
			});

			function adicionarCampos(quantidade){
			
				//alert(quantidade.value);
				var max_fields = quantidade.value;
				var wrapper = $(".input_fields_wrap"); //Fields wrapper
				let limpa = document.getElementById("adicionaCampos");
				limpa.innerText = "";

				for(var x = 1; x <= max_fields; x++){
					$(wrapper).append("<div class='form-group col-md-12'><h5>Bolsa "+x+"</h5></div><div class='form-group col-md-6'><label class='labelForms' for='e_voluntaria"+x+"'>Bolsa Voluntária?</label><select class='form-control formss' name='e_voluntaria"+x+"' id='e_voluntaria"+x+"'><option value='Sim'>Sim</option><option value='Não'>Não</option></select></div><div class='form-group col-md-6'><label class='labelForms' for='valor"+x+"'>Valor:</label><input type='float' class='form-control formss' id='valor"+x+"' name='valor"+x+"' OnKeyPress='moeda(this)'></div>");
				}
        	}
		</script>

		<?php include('footer.php'); ?>
</body>
</html>