<?php
require '../php/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    // Pegando o valor total da URL (enviado pelo formulário ou query string)
    $valor_total = $_POST['total'] ?? 0; // Certifique-se de enviar o valor do formulário
    $valor_total = floatval($valor_total); // Converte para número decimal

    // Registrando a data atual
    $data_venda = date('Y-m-d H:i:s'); // Formato padrão para bancos de dados MySQL

    // Prepara a inserção no banco
    $stmt = $conn->prepare("INSERT INTO vendas (nome_cliente, rua, numero, bairro, cidade, estado, cep, metodo_pagamento, card_number, card_validity, card_cvv, valor_total, data_venda) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $nome_cliente, $rua, $numero, $bairro, $cidade, $estado, $cep, $payment, $card_number, $card_validity, $card_cvv, $valor_total, $data_venda);

    if ($stmt->execute()) {
        header('location: ../compra_realizada.html'); // Redireciona após sucesso
    } else {
        echo "Erro ao registrar a venda: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
