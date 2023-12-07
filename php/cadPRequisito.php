<?php
session_start();
include("Professor.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $requisitos = array();

    if (isset($_POST['requisitos']) && is_array($_POST['requisitos'])) {
        $requisitos = $_POST['requisitos'];
    }

    $professor = new Professor();
    $professor->setSIAPE($_SESSION['user_login']);

    echo $professor->ProfessorCadastraPRequisito($requisitos);
}
?>
