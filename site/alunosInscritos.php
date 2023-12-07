<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/gerenciamento.css">
    <link rel="stylesheet" href="../css/modais.css">
    <link href="../assets/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css"/>

</head>

<body>

    <?php include('navbar.php'); ?>

    <section id="main-content">
		<section class="wrapper">

            <div class="row">
                <div class="col-md-12">
                    <div style="overflow-x: auto;">
                    <h4><i class="fa fa-angle-right"></i>Alunos cadastrados no projeto <?php echo $nomeProjeto?></h4>
                        <hr>
                            <table class="table table-striped table-advance table-hover mx-auto" id="tabelaProjetosProf">
                                <thead>
                                    <tr>
                                    <th><i class="fa fa-tag"></i>Matrícula</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Data Ingresso</th>
                                        <th>Curso</th>
                                        <th>Periodo</th>
                                        <th>Telefone</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <?php include("../php/Projeto.php");
                                    $projeto = new projeto();
                                    $resultado = $projeto->buscaAlunosProjeto($idProjeto);
                                    while($linha = mysqli_fetch_array($resultado)){ ?>
                                        <tr>
                                            <td><?=$linha['matricula']?></td>
                                            <td><?=$linha['nome']?></td>
                                            <td><?=$linha['email']?></td>
                                            <td><?=data($linha['dataIngresso'])?></td>
                                            <td><?=$linha['curso']?></td>
                                            <td><?=$linha['periodo']?></td>
                                            <td><?=$linha['telefone']?></td>
                                        </tr>
                                        <?php } ?>   

                            </tbody>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->
        </section>
    </section>

    <div style="height: 300px;"></div>
    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!--<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>-->

    <!-- DataTables JavaScript -->
		<script src="../assets/js/plugins/dataTables/jquery.dataTables.js"></script>
		<script src="../assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
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
        <script src="../js/Validacoes.js" type="text/javascript"></script>
        <script src="../js/cadProjeto.js" type="text/javascript"></script>
        <script>
			$(document).ready(function() {
                new DataTable('#tabelaProjetosProf');
				$('#tabelaProjetosProf').dataTable( {
					"sort": false,
                    "pageLength": 25
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