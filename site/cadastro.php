<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.css"/>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="../img/logo.png" alt="Logo" width="55px" height="26px" class="d-inline-block align-text-top">
            Bolsa Fácil
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="well titulo">Cadastro</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form method="POST" id="frmCad" name="frmCad">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label class="label2">Nome:</label>
                                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="label2">Matrícula/SIAPE:</label>
                                <input type="text" name="matricula" id="matricula" placeholder="Digite sua matrícula" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label2">Email:</label>
                            <textarea name="email" id="email" placeholder="Digite seu email" rows="1" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label class="label2">CPF:</label>
                                <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label>Data de Nascimento:</label>
                                <div class='input-group'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input type='text' id="data_nasc" name="data_nasc" placeholder="XX/XX/XXXX" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label class="label2">Telefone:</label>
                                <input type="text" name="telefone" id="telefone" placeholder="(XX)YYYYY-ZZZZ" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label class="label2">Senha:</label>
                                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="label2">Confirmar senha:</label>
                                <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="Confirme sua senha" class="form-control">
                            </div>
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
            $("#cpf").mask("999.999.999-99");
            $("#telefone").mask("(99)99999-9999");
            $("#data_nasc").mask("99/99/9999");
            $('#data_nasc').datetimepicker({
                locale: 'pt_br',
                format: 'L'
            });
        });
    </script>
</body>
</html>