<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php include("navbar.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.css"/>

</head>
<body>
    <div class="container">
        <h1 class="well titulo">Cadastrar Projeto</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form method="POST" id="frmCadProjeto" name="frmCadProjeto">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label class="label2">Nome:</label>
                                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form-control">
                            </div>
                            <div class="col-sm-6">
								<label>Tipo de Projeto</label>
								<select class="form-control" name="tipoProjeto" id="tipoProjeto">
									<option value=""  selected="selected">Selecione o tipo de projeto</option>
									<option value="Iniciação Científica">Iniciação Científica</option>
									<option value="Treinamento Profissional">Treinamento Profissional</option>
									<option value="Monitoria">Monitoria</option>
									<option value="Extensão">Extensão</option>						
								</select>
							</div>
                        </div>
                        <div class="form-group">
                            <label class="label2">Descrição:</label>
                            <textarea name="descricao" id="descricao" placeholder="Digite as informações do projeto." rows="2" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label class="label2">Início processo seletivo:</label>
                                <div class='input-group'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input type='text' id="data_inicio_processo" name="data_inicio_processo" placeholder="XX/XX/XXXX" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="label2">Fim processo seletivo:</label>
                                <div class='input-group'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input type='text' id="data_fim_processo" name="data_fim_processo" placeholder="XX/XX/XXXX" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label class="label2">Método de entrada:</label>
                                <input type="text" name="metodoDeEntrada" id="metodoDeEntrada" placeholder="Digite o método de entrada." class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="label2">Quantidade de Vagas:</label>
                                <input type="number" name="qtdVagas" id="qtdVagas" placeholder="Quantidade de vagas" class="form-control" onchange="adicionarCampos(this)">
                            </div> 
                        </div>

                        <div class="row">
                            <div class="input_fields_wrap"></div>
                        </div>

                        <button type="submit" class="btn btn-lg btn-info btnregister">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
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
        <script src="../js/cadUsuario.js" type="text/javascript"></script>
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


            for(var x = 1; x <= max_fields; x++){
                $(wrapper).append("<div class='col-sm-6 form-group'><label class='label2'>Voluntária?</label><input type='text' name='e_voluntaria"+x+"' id='e_voluntaria"+x+" class='form-control'></div><div class='col-sm-6 form-group'><label class='label'>Valor da bolsa:</label><input type='number' name='valor' id='valor' placeholder='Valor da bolsa.' class='form-control'</div>");
			}
        }
        
    </script>
    <!--<footer class="bg-secondary text-white fixed-bottom text-center py-3">
    <a href="#" class="text-white"><i class="fab fa-facebook-square fa-2x mx-2"></i></a>
    <a href="#" class="text-white"><i class="fab fa-instagram fa-2x mx-2"></i></a>
    <a href="#" class="text-white"><i class="fab fa-linkedin fa-2x mx-2"></i></a>
    <br>
    Home &bull; Contato <br>
    &copy; 2023 Copyright: BolsaFacil. Todos os direitos reservados.
  </footer>-->
</body>
</html>