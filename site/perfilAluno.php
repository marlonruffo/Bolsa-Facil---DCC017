<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/perfil.css">

</head>
<body>
    <?php include('navbar.php'); ?>

    <div class="container mt-5">
        <div class="card mx-auto" style="width: 50%; background-color: #D9D9D9; color: black; border-radius: 15px;">
            <h2 class="card-header text-center">Perfil do Aluno</h2>
            <div class="card-body text-center">
                <!-- Adicione lógica PHP para recuperar os dados do aluno do banco de dados -->
                <?php
                    // Simulação de dados do aluno (substitua com suas consultas)
                    $nome = "Christian Rafael";
                    $email = "christianoliveira.coelho@estudante.ufjf.br";
                    $tipoUsuario = "Aluno";
                    $matricula = "202065249AC";
                    $idade = 21;
                    $curso = "Ciência da Computação";
                    $periodo = "8º";
                    $foto = "../img/logoUfjf.png";
                ?>
                <img src="<?php echo $foto; ?>" alt="Foto 3x4" class="mx-auto d-block mb-3" width="90px" height="120px">
                <form action="processar_edicao_perfil.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <strong class="float-left">Nome:</strong>
                        <input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Email:</strong>
                        <input type="text" name="email" value="<?php echo $email; ?>" class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Tipo de Usuário:</strong>
                        <input type="text" name="tipoUsuario" value="<?php echo $tipoUsuario; ?>" class="form-control rounded" readonly>
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Matrícula:</strong>
                        <input type="text" name="matricula" value="<?php echo $matricula; ?>" class="form-control rounded" readonly>
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Idade:</strong>
                        <input type="text" name="idade" value="<?php echo $idade; ?>" <?php echo ($tipoUsuario === "Aluno" ? "" : "readonly"); ?> class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Curso:</strong>
                        <input type="text" name="curso" value="<?php echo $curso; ?>" <?php echo ($tipoUsuario === "Aluno" ? "" : "readonly"); ?> class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Período:</strong>
                        <input type="text" name="periodo" value="<?php echo $periodo; ?>" <?php echo ($tipoUsuario === "Aluno" ? "" : "readonly"); ?> class="form-control rounded">
                    </div>
           

                    <!-- Upload de PDF (Currículo) -->
                    <div class="form-group mb-3 text-left">
                        <label for="curriculo">Currículo (PDF):</label>
                        <input type="file" class="form-control-file" id="curriculo" name="curriculo">
                    </div>

                    <!-- Botões de Ação -->
                    <div class="text-center">
                        <a href="pagina_anterior.php" class="btn btn-danger ml-2">Voltar</a>
                        <?php if ($tipoUsuario === "Aluno"): ?>
                            <button type="submit" class="btn btn-danger">Editar</button>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div style="height: 300px;"></div>
    <?php include('footer.php'); ?>
</body>


</html>