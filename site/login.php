<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .login-box {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #aca9a9;
        }
    </style>
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
                    <a class="nav-link" href="cadastro.php">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container login-box ">
        <div class="text-center">
            <a class="navbar-brand d-block mx-auto" href="#">
                <img src="../img/logo.png" alt="Logo" width="70px" height="35px" class="d-inline-block align-text-top">
            </a>
        </div>
        <div>
            <form>
                <div class="form-group">
                    <label for="username">CPF:</label>
                    <input type="text" class="form-control rounded-pill" id="username" placeholder="Digite seu CPF">
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" class="form-control rounded-pill" id="password" placeholder="Digite sua senha">
                </div>
                <button type="submit" class="btn btn-danger rounded-pill btn-block">Entrar</button>
                <!--<button type="submit" class="btn btn-link btn-block" style="text-decoration: underline;">Não possui uma conta? Criar</button>-->
                <a class="btn btn-link btn-block" style="text-decoration: underline;" href="cadastro.php">Não possui uma conta? Criar </a>
            </form>
        </div>
    </div>

    

    <footer class="bg-secondary text-white fixed-bottom text-center py-3">
        <a href="#" class="text-white"><i class="fab fa-facebook-square fa-2x mx-2"></i></a>
        <a href="#" class="text-white"><i class="fab fa-instagram fa-2x mx-2"></i></a>
        <a href="#" class="text-white"><i class="fab fa-linkedin fa-2x mx-2"></i></a>
        <br>
        Home &bull; Contato <br>
        &copy; 2023 Copyright: BolsaFacil. Todos os direitos reservados.
    </footer>
</body>

</html>