<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/navbar.css">
    <style>
    .corDeFundo {
      background-color: #B22D30;
    }
    </style>
</head>
<body> 
  <nav class="navbar navbar-expand-lg corDeFundo navbar-dark fixed-top">
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
          <a class="nav-link" href="../php/controller.php?p=index">Início</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../php/controller.php?p=ver_perfil">Perfil - <?php echo $_SESSION['user_nome']; ?></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../php/verificalogin.php?logout=logout">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
</body>
</html>