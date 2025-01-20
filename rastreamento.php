<?php
session_start();
$endereco = isset($_SESSION['endereco']) ? $_SESSION['endereco'] : null;
$tracking_number = isset($_POST['tracking_number']) ? $_POST['tracking_number'] : null;
$tracking_info = null;

if ($tracking_number) {
    require './php/conexao.php';  // Conexão com o banco de dados

    // Consulta para obter as informações do rastreamento
    $stmt = $conn->prepare("SELECT * FROM vendas WHERE tracking_number = ?");
    $stmt->bind_param("s", $tracking_number);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Se encontrar o número de rastreamento
        $tracking_info = $result->fetch_assoc();
    } else {
        $tracking_info = null;  // Se não encontrar, atribui null
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rastreamento</title>
    <style>
        /* Seu CSS permanece o mesmo */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eaf4fc;
        }
        .container {
            display: flex;
            gap: 40px;
            max-width: 1400px;
            margin: 40px auto;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .main-content {
            flex: 2;
        }
        .summary-card {
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 40px;
            background-color: #f0faff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .header {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #202325;
        }
        .section {
            margin-bottom: 40px;
        }
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #0056b3;
        }
        .input-field {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }
        .input-field input {
            flex: 1;
            padding: 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 18px;
        }
        .summary-card h3 {
            font-size: 26px;
            margin-bottom: 25px;
            color: #007bff;
        }
        .summary-card p {
            margin: 20px 0;
            font-size: 22px;
        }
        .button-container {
            text-align: right;
        }
        .confirm-button {
            padding: 16px 35px;
            background-color: #24272b;
            color: #fff;
            font-size: 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        .confirm-button:hover {
            background-color: #0056b3;
        }
        .back-button{
            padding: 16px 35px;
            background-color: #24272b;
            color: #fff;
            font-size: 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;     
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main-content">
            <h1 class="header">Rastreamento do Pedido</h1>
            <form id="tracking-form" method="POST" action="rastreamento.php">
                <div class="section">
                    <div class="section-title">Informações de Rastreamento</div>
                    <div class="input-field">
                        <input type="text" id="tracking-number" name="tracking_number" placeholder="Número de Rastreamento" required>
                    </div>
                </div>
                <div class="summary-card">
                    <h3>Resumo do Endereço</h3>
                    <?php if ($tracking_info): ?>
                        <p>Nome: <?= htmlspecialchars($tracking_info['nome_cliente']) ?></p>
                        <p>Rua: <?= htmlspecialchars($tracking_info['rua']) ?>, <?= htmlspecialchars($tracking_info['numero']) ?></p>
                        <p>Bairro: <?= htmlspecialchars($tracking_info['bairro']) ?></p>
                        <p>Cidade: <?= htmlspecialchars($tracking_info['cidade']) ?> - <?= htmlspecialchars($tracking_info['estado']) ?></p>
                        <p>CEP: <?= htmlspecialchars($tracking_info['cep']) ?></p>
                        <p>Status: Seu pedido esta sendo preparado para o envio!</p> <!-- Exemplo de status -->
                        <p>Consulte no mapa a localização do pedido:</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5306260908246!2d-44.25240232389755!3d-19.432676023016743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa64ff8f3dd12e1%3A0x4a3d779e69beb723!2sSENAI%20Sete%20Lagoas%20Funda%C3%A7%C3%A3o%20Zerrenner!5e0!3m2!1spt-BR!2sbr!4v1737386189600!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else: ?>
                        <p>Endereço não encontrado ou número de rastreamento inválido.</p>
                    <?php endif; ?>
                </div>

                <div class="button-container">
                    <button type="submit" class="confirm-button">Consultar Rastreamento</button>
                    <button type="button" class="back-button" onclick="window.location.href='./index.php'">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

