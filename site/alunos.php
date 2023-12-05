<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bolsa fácil</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/modais.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>


<?php include('navbar.php'); ?>
  <div class="container mt-3">
    <h2 class="text-primary text-center" >Lista de Alunos</h2>
    
    <div class="input-group mb-3">
      <input type="text" class="form-control rounded-pill" placeholder="Pesquise pelo nome" aria-label="Pesquisar" aria-describedby="button-addon2" style="background-color: #D9D9D9; color: white;">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">🔍</button>
      </div>
    </div>

    <div class="float-right mb-3">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary rounded-pill dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filtrar Curso
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Curso A</a>
          <a class="dropdown-item" href="#">Curso B</a>
          <a class="dropdown-item" href="#">Curso C</a>
          <!-- Adicione mais opções conforme necessário -->
        </div>
      </div>
    </div>
  
    <?php
// Simulação de dados do banco de dados (substitua com suas consultas)
$alunos = array(
    array("Aluno 1", "aluno1@example.com", "Curso A", "1º Período"),
    array("Aluno 2", "aluno2@example.com", "Curso B", "2º Período"),
    array("Aluno 3", "aluno3@example.com", "Curso C", "3º Período"),
    array("Aluno 4", "aluno4@example.com", "Curso D", "4º Período"),
    array("Aluno 5", "aluno5@example.com", "Curso E", "5º Período"),
  
);
?>

<table class="table table-secondary mt-3">
    <colgroup>
        <col style="border-right: 1px solid black;"> 
        <col style="border-right: 1px solid black;">
        <col style="border-right: 1px solid black;"> 
        <col style="border-right: 1px solid black;"> 
        <col> 
    </colgroup>
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Curso</th>
            <th scope="col">Período</th>
            <th scope="col">Perfil</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?php echo $aluno[0]; ?></td>
                <td><?php echo $aluno[1]; ?></td>
                <td><?php echo $aluno[2]; ?></td>
                <td><?php echo $aluno[3]; ?></td>
                <td class="text-center">
                    <button class="btn btn-danger rounded-pill" data-toggle="modal" data-target="#exampleModal">
                        Ver
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

  </div>
  
  <footer class="bg-secondary text-white fixed-bottom text-center py-3">
    <a href="#" class="text-white"><i class="fab fa-facebook-square fa-2x mx-2"></i></a>
    <a href="#" class="text-white"><i class="fab fa-instagram fa-2x mx-2"></i></a>
    <a href="#" class="text-white"><i class="fab fa-linkedin fa-2x mx-2"></i></a>
    <br>
    Home &bull; Contato <br>
    &copy; 2023 Copyright: BolsaFacil. Todos os direitos reservados.
  </footer>




  

  <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <form>
        <div class="modal-header">
          <h5 class="modal-title">Nome do Aluno</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputField1">CPF:</label>
              <input type="text" class="form-control" id="inputField1"  value="" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputField2">E-mail:</label>
              <input type="email" class="form-control" id="inputField2"  value="" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputField3">Data de Nascimento:</label>
              <input type="date" class="form-control" id="inputField3"  value="" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputField4">Data Ingresso:</label>
              <input type="date" class="form-control" id="inputField4"  value="" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputField5">Telefone:</label>
              <input type="text" class="form-control" id="inputField5"  value="" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputField6">Matrícula:</label>
              <input type="text" class="form-control" id="inputField6"  value="" readonly>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>