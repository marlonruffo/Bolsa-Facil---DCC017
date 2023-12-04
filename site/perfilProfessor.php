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
            <h2 class="card-header text-center">Perfil do Professor</h2>
            <div class="card-body text-center">
                <!-- Adicione lógica PHP para recuperar os dados do aluno do banco de dados -->
                <?php
                    // Simulação de dados do aluno (substitua com suas consultas)
                    $nome = "Pedro Henrique";
                    $email = "pedrohenrique@ufjf.br";
                    $tipoUsuario = "Professor";
                    $siape = "231942";
                    $idade = 34;
                    $departamento = "DCC";
                    $bolsasVinculadas = array("Bolsa 1", "Bolsa 2", "Bolsa 3");
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
                        <strong class="float-left">Siape:</strong>
                        <input type="text" name="siape" value="<?php echo $siape; ?>" class="form-control rounded" readonly>
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Idade:</strong>
                        <input type="text" name="idade" value="<?php echo $idade; ?>" <?php echo ($tipoUsuario === "Professor" ? "" : "readonly"); ?> class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Departamento:</strong>
                        <input type="text" name="curso" value="<?php echo $departamento; ?>" <?php echo ($tipoUsuario === "Professor" ? "" : "readonly"); ?> class="form-control rounded">
                    </div>
                    <div class="mb-3">
                        <strong class="float-left">Bolsas Vinculadas:</strong>
                        <input type="text" name="bolsasVinculadas" value="<?php echo implode(', ', $bolsasVinculadas); ?>" readonly class="form-control rounded">
                    </div>
                    
    
                    <!-- Botões de Ação -->
                    <div class="text-center">
                        <a href="pagina_anterior.php" class="btn btn-danger ml-2">Voltar</a>
                        <?php if ($tipoUsuario === "Professor"): ?>
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