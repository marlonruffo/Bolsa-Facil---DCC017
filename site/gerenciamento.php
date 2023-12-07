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
    <div class="text-right">
        <a href="../php/controller.php?p=cadastrar_projeto">
            <button class="btn btn-primary btncriar rounded mr-3 my-3" data-toggle="modal">Cadastrar Projeto</button>
        </a>
    </div>
    <section id="main-content">
		<section class="wrapper">

            <div class="row">
                <div class="col-md-12">
                    <div style="overflow-x: auto;">
                    <h4><i class="fa fa-angle-right"></i>Projetos Cadastrados:</h4>
                        <hr>
                            <table class="table table-striped table-advance table-hover mx-auto" id="tabelaProjetosProf">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-tag"></i>Nome</th>
                                        <th>Tipo</th>
                                        <th>Método de Entrada</th>
                                        <th>Quantidade de Vagas</th>
                                        <th>Início</th>
                                        <th>Fim</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <?php include("../php/Professor.php");
                                $professor = new Professor();
                                $professor->setSIAPE($_SESSION['user_login']);
                                $resultado = $professor->buscaProjetosProf();
                                while($linha = mysqli_fetch_array($resultado)){ ?>
                                    <tr>
                                        <td><?=$linha['nomeProjeto']?></td>
                                        <td><?=$linha['tipoProjeto']?></td>
                                        <td><?=$linha['metodoDeEntrada']?></td>
                                        <td><?=$linha['qtdVagas']?></td>
                                        <td><?=data($linha['data_inicio_processo'])?></td>
                                        <td><?=data($linha['data_fim_processo'])?></td>
                                        <td class="text-center">
                                        <button type="button" class="btn btn-secondary botaotabela" data-toggle="modal" data-target="#editarBolsa" onclick="carrega_projeto_id(<?=$linha['idProjeto']?>)">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </button>
                                        </td>
                                    </tr>
                                    <?php } ?>


                            </tbody>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->
        </section>
    </section>
<!--<table class="table table-striped tabela">
    <thead>
        <tr class="legenda bg-danger text-white">
            <th scope="col">Título</th>
            <th scope="col">Tipo</th>
            <th scope="col">Lim. Inscrição</th>
            <th scope="col">Responsável</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php //foreach ($projetos as $projeto): ?>
            <tr>
                <th scope="row"><?php //echo $projeto[0]; ?></th>
                <td><?php //echo $projeto[1]; ?></td>
                <td><?php //echo $projeto[2]; ?></td>
                <td><?php //echo $projeto[3]; ?></td>
                <td>
                    <button type="button" class="btn btn-secondary botaotabela" data-toggle="modal" data-target="#visualizarBolsa">
                        <ion-icon name="eye-outline"></ion-icon>
                    </button>
                    <button type="button" class="btn btn-secondary botaotabela" data-toggle="modal" data-target="#editarBolsa">
                        <ion-icon name="create-outline"></ion-icon>
                    </button>
                    <button type="button" class="btn btn-secondary botaotabela" data-toggle="modal" data-target="#deletarBolsa">
                        <ion-icon name="trash-bin-outline"></ion-icon>
                    </button>
                </td>
            </tr>
        <?php //endforeach; ?>
    </tbody>
</table>-->

    <!-- Modal Criacao de Bolsa -->
    <div class="modal" tabindex="-1" role="dialog" id="criacaoBolsa">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Criar Bolsa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputField1">Título:</label>
                                <input type="text" class="form-control" id="inputField1" placeholder="Digite algo...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputField1">Professor responsável:</label>
                                <input type="text" class="form-control" id="inputField1" placeholder="Digite algo...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputField2">Vagas remuneradas:</label>
                                <input type="email" class="form-control" id="inputField2" placeholder="Digite algo...">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputField3">Vagas voluntárias:</label>
                                <input type="number" class="form-control" id="inputField3" placeholder="Digite algo...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputField4">Data Ingresso:</label>
                                <input type="date" class="form-control" id="inputField4" placeholder="Digite algo...">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputField5">Telefone:</label>
                                <input type="text" class="form-control" id="inputField5" placeholder="Digite algo...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputField6">Matrícula:</label>
                                <input type="text" class="form-control" id="inputField6" placeholder="Digite algo...">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary botaoSalvarModal">Inscrever-se</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <!-- Modal Visualizar Bolsa -->
    <div class="modal" tabindex="-1" role="dialog" id="visualizarBolsa">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Visualizar Bolsa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputField1">Título:</label>
                                <input type="text" class="form-control" id="inputField1" placeholder="Digite algo...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputField1">Professor responsável:</label>
                                <input type="text" class="form-control" id="inputField1" placeholder="Digite algo...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputField2">Vagas remuneradas:</label>
                                <input type="email" class="form-control" id="inputField2" placeholder="Digite algo...">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputField3">Vagas voluntárias:</label>
                                <input type="number" class="form-control" id="inputField3" placeholder="Digite algo...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputField4">Data Ingresso:</label>
                                <input type="date" class="form-control" id="inputField4" placeholder="Digite algo...">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputField5">Telefone:</label>
                                <input type="text" class="form-control" id="inputField5" placeholder="Digite algo...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputField6">Matrícula:</label>
                                <input type="text" class="form-control" id="inputField6" placeholder="Digite algo...">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal Editar Bolsa -->

    <div class="modal" tabindex="-1" role="dialog" id="editarBolsa">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Bolsa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="body"></div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary botaoSalvarModal">Editar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="deletarBolsa">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Deseja deletar a bolsa Titulo ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary botaoSalvarModal">Deletar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div style="height: 300px;"></div>

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