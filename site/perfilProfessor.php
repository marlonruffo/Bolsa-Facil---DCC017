<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/perfil.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.css"/>

</head>

<body>
    <?php
    include('navbar.php'); ?>

    <div class="container mt-5">
        <div class="card mx-auto" style="width: 50%; background-color: #D9D9D9; color: black; border-radius: 15px;">
            <h2 class="card-header text-center">Dados Pessoais</h2>
            <div class="card-body text-center">
                <!-- Adicione lógica PHP para recuperar os dados do aluno do banco de dados -->
                <?php
                    include("../php/Professor.php");
                    $professor = new Professor();
                    $professor->buscaProfessor($_SESSION['user_login']);

                ?>
                <!--<img src="" alt="Foto 3x4" class="mx-auto d-block mb-3" width="90px" height="120px">-->
                <form method="post" id="editaPerfilProf"  name="editaPerfilProf" enctype="multipart/form-data">
                    <div class="mb-3">
                        <strong class="float-left">Nome:</strong>
                        <input type="text" name="nome" id="nome" value="<?php echo $professor->getNome(); ?>" class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">CPF:</strong>
                        <input type="text" name="cpf" id="cpf" value="<?php echo $professor->getCpf(); ?>" class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Email:</strong>
                        <input type="text" name="email" id="email" value="<?php echo $professor->getEmail(); ?>" class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Telefone:</strong>
                        <input type="text" name="telefone" id="telefone" value="<?php echo $professor->getTelefone(); ?>" placeholder="(XX)YYYYY-ZZZZ" class="form-control rounded">
                    </div>
                    <div class="mb-3">
                    <strong class="float-left">Data de Nascimento:</strong>
                        <div class='input-group'>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input type='text' id="data_nasc" name="data_nasc" placeholder="XX/XX/XXXX" value="<?php echo data($professor->getDataNasc()); ?>" class="form-control rounded"/>
                        </div>
                    </div>
                    <div class="mb-3">
                    <strong class="float-left">Data de Ingresso:</strong>
                        <div class='input-group'>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input type='text' id="data_ing" name="data_ing" placeholder="XX/XX/XXXX" value="<?php if($professor->getDataIngresso() != ''){echo data($professor->getDataIngresso());} ?>" class="form-control rounded"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Siape:</strong>
                        <input type="text" name="siape" id= "siape" value="<?php echo $professor->getSIAPE(); ?>" class="form-control rounded" readonly>
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Senha:</strong>
                        <input type="password" name="senha" id= "senha" value="<?php echo $professor->getSenha(); ?>"class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Confirmar senha:</strong>
                        <input type="password" name="confirmarSenha" id= "confirmarSenha" value="<?php echo $professor->getSenha(); ?>"class="form-control rounded">
                    </div>
            
                    <!-- Botões de Ação -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div style="height: 300px;"></div>
    <?php include('footer.php'); ?>

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
        <script src="../js/editarProfessor.js" type="text/javascript"></script>
        <script src="../js/Validacoes.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){		
            //alert("teste");
            $("#cpf").mask("999.999.999-99");
            $("#telefone").mask("(99)99999-9999");
            $("#data_nasc").mask("99/99/9999");
            $("#data_ing").mask("99/99/9999");
            $('#data_nasc').datetimepicker({
                locale: 'pt_br',
                format: 'L'
            });
            $('#data_ing').datetimepicker({
                locale: 'pt_br',
                format: 'L'
            });
        });
    </script>

<?php
function data($data){
    return date("d/m/Y", strtotime($data));
} 
?>
</body>


</html>