<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/projetos.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .conteudo {
            margin-left: 20%;
        }

        .projeto {
            margin-bottom: 30px;
            /* Adiciona algum espaço entre os projetos */
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>


    <h2 class="text-primary text-center">Tipos de Projetos</h2>
    <div class="conteudo">
        <div class="projeto">
            <h4 class="text-danger">Monitoria</h4>
            <p>
                A Monitoria é um projeto que oferece auxílio acadêmico a estudantes, promovendo o aprendizado colaborativo e a troca de conhecimento entre alunos.
            </p>
        </div>
        <div class="projeto">
            <h4 class="text-danger">Bolsa de Extensão</h4>
            <p>
                A Bolsa de Extensão permite que estudantes apliquem seus conhecimentos em projetos que beneficiam a comunidade, integrando teoria e prática.
            </p>
        </div>
        <div class="projeto">
            <h4 class="text-danger">Treinamento Profissional</h4>
            <p>
                O Treinamento Profissional oferece oportunidades para os alunos desenvolverem habilidades práticas relevantes para o mercado de trabalho.
            </p>
        </div>
        <div class="projeto">
            <h4 class="text-danger">Iniciação Científica</h4>
            <p>
                A Iniciação Científica proporciona aos estudantes a oportunidade de se envolverem em pesquisas acadêmicas sob a orientação de professores.
            </p>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>


</html>