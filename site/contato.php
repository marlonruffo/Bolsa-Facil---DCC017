<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/contato.css">

    <style>
        .contato {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .formulario {
            background-color: #aca9a9;
            padding: 20px;
            border-radius: 8px;
            color: white;
            width: 100%;
            margin-bottom: 20px;
            /* Ocupa toda a largura disponível */
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
        }

        .footer {
            z-index: -1;
        }
    </style>



</head>

<body>

    <?php include('navbar.php'); ?>
    <h2 class="text-primary text-center">Lista de Alunos</h2>

    <div class="content">
        <img src="/img/contato.png" class="img-fluid contatoimagem" alt="">


        <section class="contato">
            <div class="text-center">
                <a class="navbar-brand" href="#">
                    <h2 class="text-primary text-center">Entre em contato com a gente!</h2>
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
                    <button type="submit" class="btn btn-danger mx-auto d-block">Enviar</button>
                </form>
            </div>
        </section>

        
    </body>
    <?php include('footer.php'); ?>

</html>