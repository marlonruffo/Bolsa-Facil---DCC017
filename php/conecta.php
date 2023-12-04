<?php	
    date_default_timezone_set("America/Sao_Paulo");
    $DB_SERVER = "127.0.0.1";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "";
    $DB_DATABASE = "sistemabolsasufjf";

    $conexao = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

    if(!$conexao)
        echo "Erro, não foi possível conectar ao banco de dados!";