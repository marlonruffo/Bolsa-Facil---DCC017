<?php

require '../vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['formContato'])) {
    // Recolha os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $texto = $_POST['textoArea'];

    // Configuração do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuração do servidor SMTP do Gmail
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->Username = '92eaa1b59f92ab'; // Seu e-mail do Gmail
        $mail->Password = '4c022b6086da24'; // Sua senha do Gmail
        $mail->Port = 2525;
        $phpmailer = new PHPMailer();

        // Configuração do e-mail
        $mail->setFrom('bolsafacil70@gmail.com', 'Bolsa Facil');
        $mail->addAddress('bolsafacil70@gmail.com'); // E-mail de destino
        $mail->Subject = $assunto;
        $mail->Body = "Nome: $nome\nEmail: $email\nAssunto: $assunto\nTexto: $texto";

        // Envia o e-mail
        $mail->send();

        header('Location: ../site/');
    } catch (Exception $e) {
        echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
    }
}

?>