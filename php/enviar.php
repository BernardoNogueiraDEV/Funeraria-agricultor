<?php
session_start();
include './conexao.php';
include '../carrinho.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php'; // Inclua o autoload do Composer

// Função para gerar número de rastreamento único
function gerarNumeroRastreamento() {
    return 'TRACK-' . strtoupper(uniqid());
}
// Função para gerar chave PIX
function gerarChavePix() {
    return 'PIX-' . strtoupper(uniqid()); // Exemplo de chave PIX gerada
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar os dados do formulário
    $nome_cliente = $_POST['nome_cliente'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $payment = $_POST['payment'];
    $card_number = $_POST['card_number'] ?? null;
    $card_validity = $_POST['card_validity'] ?? null;
    $card_cvv = $_POST['card_cvv'] ?? null;
    $card_brand = $_POST['card_brand'] ?? null; 
    $valor_total = floatval($_POST['total'] ?? ($_GET['total'] ?? 0));
    $data_venda = date('Y-m-d H:i:s'); 
    $tracking_number = gerarNumeroRastreamento();
    $chave_pix = null; // Initialize Pix key

    // Inserir os dados no banco de dados
    $stmt = $conn->prepare(
        "INSERT INTO vendas 
        (nome_cliente, rua, numero, bairro, cidade, estado, cep, metodo_pagamento, 
        card_number, card_validity, card_cvv, card_brand, valor_total, data_venda, tracking_number, chave_pix) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    // Generate Pix key if payment method is Pix
    if ($payment === 'pix') {
        $chave_pix = gerarChavePix(); // Generate Pix key
    }

    $stmt->bind_param(
        "ssssssssssssssss", 
        $nome_cliente, $rua, $numero, $bairro, $cidade, $estado, $cep, 
        $payment, $card_number, $card_validity, $card_cvv, $card_brand, 
        $valor_total, $data_venda, $tracking_number, $chave_pix // Include Pix key
    );

    if ($stmt->execute()) {
        echo "Venda registrada com sucesso!";
        if ($payment === 'pix') {
            echo "Sua chave PIX é: $chave_pix"; // Exibir chave PIX gerada
        }
        
        if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
            echo "Por favor, faça o login para continuar.";
            exit();
        }

        $email_cliente = $_SESSION['email'];
        $nome_cliente = $_SESSION['nome'];

        // Configuração do PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Verifique se o e-mail do usuário está na sessão
            if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
                die("Erro: O e-mail do usuário não está disponível na sessão.");
            }
        
            // Obter o e-mail e o nome do usuário da sessão
            $email_cliente = $_SESSION['email'];
            $nome_cliente = $_SESSION['nome'] ?? 'Cliente'; // Nome padrão se não estiver na sessão
        
            // Configuração do PHPMailer
            $mail->CharSet = 'UTF-8'; // Define a codificação para UTF-8
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bernardo.nogueiraff@gmail.com'; // Seu e-mail do Gmail
            $mail->Password = 'flns kzgx rtdl qqkr';          // Senha de app do Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
        
            // Configurar remetente e destinatário
            $mail->setFrom('bernardo.nogueiraff@gmail.com', 'Funerária Agricultor'); // Remetente fixo
            $mail->addAddress($email_cliente, $nome_cliente); // Destinatário com e-mail e nome da sessão
        
            // Configurar o conteúdo do e-mail
            $assunto = "Seu número de rastreamento";
            $mensagem = "Olá $nome_cliente,\n\nSeu número de rastreamento é: $tracking_number\n\nAcompanhe o status da sua encomenda.";
            $mail->Subject = $assunto;
            $mail->Body = $mensagem;
        
            // Enviar e-mail
            $mail->send();
            echo "E-mail enviado com sucesso!";
            
            
            // Call the clearCart function
            echo "<script>
            limparCarrinho();
            window.location.href = '../index.php';
            </script>";

        } catch (Exception $e) {
            echo "Falha ao enviar o e-mail. Erro: {$mail->ErrorInfo}";
        }
        
        $stmt->close();
        $conn->close();
    } else {
        echo "Erro ao registrar a venda: " . $stmt->error;
    }
}
?>
