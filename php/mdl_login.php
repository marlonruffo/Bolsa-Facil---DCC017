<?php
function busca_usuarios_alunos(){
    include("conecta.php");

    $sql = "SELECT * FROM aluno";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

    return $resultado;
}

function busca_usuarios_professores(){
    include("conecta.php");

    $sql = "SELECT * FROM professor";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

    return $resultado;
}
?>