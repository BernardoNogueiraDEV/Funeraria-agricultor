<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include '../php/conexao.php';

require '../vendor/autoload.php'; // Inclua o autoload do Composer

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userEmail = $_POST['email']; // Captura o e-mail enviado pelo formulário

    // Validação do e-mail
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        echo 'E-mail inválido. Por favor, tente novamente.';
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bernardo.nogueiraff@gmail.com'; // E-mail do remetente
        $mail->Password = 'flns kzgx rtdl qqkr'; // Senha de app fornecida
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configurações do e-mail
        $mail->setFrom('bernardo.nogueiraff@gmail.com', 'Funerária Agricultor'); // Remetente
        $mail->addAddress($userEmail); // Destinatário
        $mail->Subject = 'Bem-vindo à Funerária Agricultor!';
        
        // Configuração de codificação e formato
        $mail->CharSet = 'UTF-8'; // Define a codificação do e-mail
        $mail->isHTML(true); // Define o formato como HTML
        $mail->Body = "
            <h1>Olá!</h1>
            <p>Seja bem-vindo à <strong>Funerária Agricultor</strong>.</p>
            <p>Estamos à disposição para atendê-lo com seriedade e respeito.</p>
            <p>Futuramente iremos ter promoções e ofertas especiais para você!</p>
        ";

        // Enviar e-mail
        $mail->send();
        header('Location: ../Home.html');
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}
?>
