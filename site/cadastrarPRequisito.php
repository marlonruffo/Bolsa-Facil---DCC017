<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/cadastroBolsaNova.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.css"/>
    <style>
        .container-form {
            border: 1px solid #ccc; 
            padding: 20px;
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff; 
        }
    </style>
</head>

<body>
<?php include('navbar.php'); ?>
    <div class="container mt-5 container-form"> 
        <center>
            <h2>Cadastrar Pré Requisitos</h2>
        </center>
        <form method="POST" id="frmCadPRequisito" name="frmCadPRequisito">
            <div class="form-group">
                <label class="labelForms" for="nomePRequisito">Requisito</label>
                <div class="input-group">
                    <input type="text" class="form-control formss" id="nomePRequisito" name="nomePRequisito" placeholder="Adicione o pré requisito">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary botaoCriar" onclick="adicionarPRequisito()">+</button>
                    </div>
                </div>
            </div>
            <input type="hidden" id="requisitos" name="requisitos" value="[]">

            <div id="requisitosCadastrados"></div>
            
            <div class="form-group">
                <button type="button" class="btn btn-success" onclick="cadastrarPRequisitos()">Cadastrar</button>
            </div>
        </form>

        <script>
    let requisitos = [];

    function adicionarPRequisito() {
        const nomePRequisito = document.getElementById("nomePRequisito").value;

        if (nomePRequisito.trim() === "") {
            alert("Por favor, adicione um pré requisito válido.");
            return;
        }

        requisitos.push(nomePRequisito);
        document.getElementById("nomePRequisito").value = "";
        atualizarListaRequisitos();
    }

    function atualizarListaRequisitos() {
        const requisitosCadastrados = document.getElementById("requisitosCadastrados");
        requisitosCadastrados.innerHTML = "<h3>Requisitos:</h3>";

        for (let i = 0; i < requisitos.length; i++) {
            requisitosCadastrados.innerHTML += "<p>" + requisitos[i] + "</p>";
        }

        document.getElementById("requisitos").value = JSON.stringify(requisitos);
    }

    function cadastrarPRequisitos() {
        if (requisitos.length === 0) {
            alert("Por favor, adicione pelo menos um pré requisito antes de cadastrar.");
            return;
        }
        document.getElementById("frmCadPRequisito").submit();
    }
</script>

        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/jquery.maskedinput.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>

        <script src="../assets/js/common-scripts.js"></script>

        <script type="text/javascript" src="../assets/js/moment.js"></script>
        <script src="../assets/js/locale/pt-br.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.js"></script>
        <script src="../js/cadProjeto.js" type="text/javascript"></script>
        <script src="../js/Validacoes.js" type="text/javascript"></script>
    </div>
</body>
<?php include('footer.php'); ?>
</html>
