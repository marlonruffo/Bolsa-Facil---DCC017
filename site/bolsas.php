<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bolsas.css">
    <link rel="stylesheet" href="../css/modais.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
  
  <?php include('navbar.php'); ?>

  <div class="container mt-3">
    <h2 class="text-primary text-center">Lista de Bolsas</h2>
    
    <div class="input-group mb-3">
      <input type="text" class="form-control rounded-pill" placeholder="Pesquise pelo nome" aria-label="Pesquisar" aria-describedby="button-addon2" style="background-color: #D9D9D9; color: white;">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">🔍</button>
      </div>
    </div>

    <div class="float-right mb-3">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary rounded-pill dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filtragem
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Curso A</a>
          <a class="dropdown-item" href="#">Curso B</a>
          <a class="dropdown-item" href="#">Curso C</a>
          <!-- Adicione mais opções conforme necessário -->
        </div>
      </div>
    </div>

    <table class="table table-secondary mt-3">
    <colgroup>
        <col style="border-right: 1px solid black;"> <!-- Linha à direita da primeira coluna -->
        <col style="border-right: 1px solid black;"> <!-- Linha à direita da segunda coluna -->
        <col style="border-right: 1px solid black;"> <!-- Linha à direita da terceira coluna -->
        <col style="border-right: 1px solid black;"> <!-- Linha à direita da quarta coluna -->
        <col> <!-- Última coluna, sem linha à direita -->
    </colgroup>
    <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Professor</th>
            <th scope="col">Tipo</th>
            <th scope="col">Vagas</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Simulação de dados do banco de dados (substitua com suas consultas)
        $projetos = [
            ['Título' => 'Cálculo', 'Professor' => 'Pedro M.', 'Tipo' => 'Monitoria', 'Vagas' => 3],
            ['Título' => 'Cálculo', 'Professor' => 'Pedro M.', 'Tipo' => 'Extensão', 'Vagas' => 1],
            // Adicione mais linhas conforme necessário
        ];

        foreach ($projetos as $projeto) {
            echo '<tr>';
            echo '<td>' . $projeto['Título'] . '</td>';
            echo '<td>' . $projeto['Professor'] . '</td>';
            echo '<td>' . $projeto['Tipo'] . '</td>';
            echo '<td>' . $projeto['Vagas'] . '</td>';
            echo '<td class="text-center"><button class="btn btn-danger rounded-pill" data-toggle="modal" data-target="#exampleModal">Ver</button></td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

  </div>

  <?php include('footer.php'); ?>
  <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <form>
        <div class="modal-header">
          <h5 class="modal-title">Nome da Bolsa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputField1">Professor responsável:</label>
              <input type="text" class="form-control" id="inputField1" value="" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputField2">Vagas remuneradas:</label>
              <input type="email" class="form-control" id="inputField2" value="" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputField3">Vagas voluntárias:</label>
              <input type="date" class="form-control" id="inputField3" value="" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputField4">Data Ingresso:</label>
              <input type="date" class="form-control" id="inputField4" value="" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputField5">Telefone:</label>
              <input type="text" class="form-control" id="inputField5" value="" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputField6">Matrícula:</label>
              <input type="text" class="form-control" id="inputField6" value="" readonly>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>