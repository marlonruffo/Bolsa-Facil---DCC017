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
</head>

<body>

    <?php include('navbar.php'); ?>

    <h2 class="card-header text-primary text-center">Gerenciamento</h2>
    <div class="text-right">
        <a href="../site/cadastrarProjeto.php">
            <button class="btn btn-danger btncriar rounded mr-3 my-3" data-toggle="modal">Cadastrar Projeto</button>
        </a>
    </div>
    <?php

$projetos = array(
    array("Modelagem de Sistemas", "Monitoria", "04/04", "Pedro Henrique"),
    array("Modelagem de Sistemas", "Monitoria", "04/04", "Pedro Henrique"),
    array("Modelagem de Sistemas", "Monitoria", "04/04", "Pedro Henrique"),
);
?>

<table class="table table-striped tabela">
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
        <?php foreach ($projetos as $projeto): ?>
            <tr>
                <th scope="row"><?php echo $projeto[0]; ?></th>
                <td><?php echo $projeto[1]; ?></td>
                <td><?php echo $projeto[2]; ?></td>
                <td><?php echo $projeto[3]; ?></td>
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
        <?php endforeach; ?>
    </tbody>
</table>

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
    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

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
</body>

</html>