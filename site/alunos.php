<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bolsa fácil</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/alunos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="script" href="/js/visualizarBolsa.js">
</head>

<body>


  <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="../img/logo.png" alt="Logo"width="55px" height="26px" class="d-inline-block align-text-top">
      Bolsa Fácil
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Conheça</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Alunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bolsas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerenciamento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  
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
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Curso</th>
          <th scope="col">Período</th>
          <th scope="col">Perfil</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Aluno 1</td>
          <td>aluno1@example.com</td>
          <td>Curso A</td>
          <td>1º Período</td>
          <td class="text-center"><button class="btn btn-danger rounded-pill">Ver</button></td>
        </tr>
        <tr>
          <td>Aluno 2</td>
          <td>aluno2@example.com</td>
          <td>Curso B</td>
          <td>2º Período</td>
          <td class="text-center"><button class="btn btn-danger rounded-pill">Ver</button></td>
        </tr>
        <!-- Adicione mais linhas conforme necessário -->
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
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  


</body>

</html>