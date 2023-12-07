<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bolsa fácil</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/navbar.css">
  <!-- <link rel="stylesheet" href="../css/index.css"> -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .sobrenos {
      font-weight: 700;
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: white;
    }

    .titulo {
      font-size: 2.5rem;
      font-family: 'Roboto', sans-serif;
      color: white;
      font-weight: 700;
    }


    .iceimagem {
      margin-bottom: 20px;
    }

    .apresentacao {
      font-family: 'Quicksand', sans-serif;
      text-align: justify;
      width: 92%;
      margin: 0 auto;
      margin-top: 10px;
      margin-bottom: 20px;
    }

    .corDeFundo {
      background-color: #B22D30;
    }

    .contato {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: #B22D30;
      border-radius: 80px;
    }

    .formulario {
      background-color: #BDBFC1;
      padding: 20px;
      border-radius: 80px;
      color: dark;
      width: 100%;
      margin-bottom: 20px;
      margin-top: 20px;
    }

    .formulario img {
      margin-right: 40px;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .content {
      margin: 0 20px;
      margin-left: 40px;
      margin-right: 40px;
      margin-bottom: 5%;
    }

    .corTexto {
      color: black;
    }

    .collorFooter {
      background-color: #BDBFC1;
      margin-top: auto;
    }

    .collorLetra {
      color: black;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg corDeFundo navbar-dark fixed-top">
    <a class="navbar-brand" href="#">
      <img src="../img/logo.png" alt="Logo" width="55px" height="26px" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="cadastro.php">Cadastrar</a>
        </li>
      </ul>
    </div>
  </nav>

  <Section class="sobrenos">
    <h1 class="titulo corTexto">Seja Bem-Vindo ao Bolsa Fácil!</h1>
    <img src="../img/sobrenos.png" class="img-fluid iceimagem" alt="">

  </Section>

  <Section class="sobrenos">
    <h1 class="titulo corTexto">Sobre nós</h1>
    <p class="apresentacao corTexto">O BolsaFácil é uma solução de software desenvolvida sob medida para a Universidade Federal de Juiz de Fora (UFJF). Seu principal propósito é simplificar e aprimorar a comunicação entre professores e alunos em relação à divulgação de uma ampla gama de oportunidades de projetos acadêmicos. Este sistema abrange várias categorias de bolsas, incluindo Iniciação científica, Projetos de extensão, Treinamento profissional e Monitorias.Visamos facilitar a divulgação de oportunidades de bolsas acadêmicas por parte dos professores da UFJF.
    </p>
    <img src="../img/projeotdepesquisa.jpg" class="img-fluid iceimagem" alt="">
  </Section>

  <div class="content">
    <img src="/img/contato.png" class="img-fluid contatoimagem" alt="">
    <section class="contato">
      <div class="text-center">
        <a class="navbar-brand" href="#">
          <h2 class="text-light text-center">Entre em contato com a gente!</h2>
          <img src="../img/contato.png" alt="Logo" width="350px" height="350px" class="d-inline-block align-text-top">
        </a>
      </div>
      <div class="formulario mx-auto col-md-4">
        <form class="my-3">
          <div class="text-center">
            <img src="../img/logo.png" alt="Logo" width="150px" height="70px" class="d-inline-block align-text-top">
          </div>
          <div class="form-group">
            <label for="exampleInputName">Nome:</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Digite seu nome">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
          </div>
          <div class="form-group">
            <label for="exampleInputSubject">Assunto:</label>
            <input type="text" class="form-control" id="exampleInputSubject" placeholder="Digite seu assunto">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Texto:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Digite seu texto" rows="3"></textarea>
          </div>
          <button type="submit" class="btn text-light corDeFundo mx-auto d-block">Enviar</button>
        </form>
      </div>
    </section>
    </div>

    <footer class="collorFooter text-white text-center py-3">
      <a href="https://www2.ufjf.br/minhaufjf/bolsas-e-oportunidades/" target="_blank">
        <img src="../img/logoUfjf.png" alt="logoUfjf" width="55px" height="50px" class="d-inline-block align-text-top">
      </a>
      <br>
      <div class="collorLetra">
        Home &bull; Contato <br>
        &copy; 2023 Copyright: BolsaFacil. Todos os direitos reservados.
      </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>