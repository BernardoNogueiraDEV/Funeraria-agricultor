<?php
session_start();

// Verifique se o e-mail foi enviado via URL
$email = isset($_GET['email']) ? $_GET['email'] : null;

// Salve o e-mail na sessão para usá-lo no envio de e-mail posteriormente
if ($email) {
    $_SESSION['user_email'] = $email;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <style>
        /* Adicionar seus estilos aqui */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; 
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 28px;
            color: #005580;
            text-align: center;
            margin-bottom: 20px;
        }
        .item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px 0;
            padding: 15px;
            border: 1px solid #b3e0ff; 
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .item:hover {
            transform: translateY(-3px);
        }
        .item-info {
            flex-grow: 1;
            margin-left: 15px;
            font-size: 16px;
        }
        .item-price {
            font-weight: bold;
            font-size: 18px;
            color: #0077b6;
        }
        .total {
            text-align: right;
            font-size: 20px;
            font-weight: bold;
            margin: 20px 0;
            color: #005580;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .buttons button {
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-btn {
            background-color: #80bfff;
            color: #fff;
        }
        .back-btn:hover {
            background-color: #3399ff;
        }
        .buy-btn {
            background-color: #0077b6;
            color: #fff;
        }
        .buy-btn:hover {
            background-color: #005580;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .item {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }
            .item img {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }
            .buttons {
                flex-direction: column;
                gap: 10px;
            }
            .buttons button {
                width: 100%;
            }
            .total {
                text-align: center;
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Carrinho de Compras</h1>
    
        <!-- Contêiner para os itens -->
        <div id="itens-container"></div>
    
        <!-- Exibição do total -->
        <p class="total" id="total"></p>
    
        <div class="buttons">
            <button class="back-btn" onclick="history.back()">Voltar</button>
            <button id="limpar-carrinho" onclick="limparCarrinho()">Limpar Carrinho</button>
            <button class="buy-btn" onclick="saveDataAndRedirect()">Comprar agora</button>
        </div>
    </div>
    
    <!-- Script para carregar os itens dinamicamente -->
    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Recupera o carrinho do localStorage
    const carrinho = JSON.parse(localStorage.getItem('container')) || [];
    const itensContainer = document.getElementById('itens-container');
    const totalElement = document.getElementById('total');

    if (carrinho.length === 0) {
        itensContainer.innerHTML = '<p>Seu carrinho está vazio!</p>';
        totalElement.innerText = '';
        return;
    }

    let total = 0;
    let itensHtml = ''; // Variável para armazenar o HTML dos itens

    // Renderiza os itens do carrinho
    carrinho.forEach(item => {
        if (item.nome && item.valor !== undefined && item.quantidade !== undefined) {
            const quantidade = item.quantidade || 1; // Assume quantidade 1 para itens sem quantidade 
            const totalItem = item.valor * quantidade; // Calculate total for the item

            total += totalItem; // Soma o total geral

            itensHtml += `
                <div class="item">
                    <div class="item-info">
                        <p><strong>Produto:</strong> ${item.nome}</p>
                        <p><strong>Preço Unitário:</strong> R$ ${(item.valor).toFixed(2)}</p>
                        <p><strong>Quantidade:</strong> ${quantidade}</p>
                        <p><strong>Total:</strong> R$ ${totalItem.toFixed(2)}</p>
                    </div>
                </div>
            `;
        } else {
            console.error("Item inválido:", item);
        }
    });

    // Inserir o HTML gerado no contêiner de itens
    itensContainer.innerHTML = itensHtml;

    // Atualizar o total na página
    totalElement.innerText = `Total: R$ ${total.toFixed(2)}`;
});

function limparCarrinho() {
    localStorage.removeItem('container');
    document.getElementById('itens-container').innerHTML = '<p>Seu carrinho está vazio!</p>';
    document.getElementById('total').innerText = '';
}

function saveDataAndRedirect() {
    const carrinho = JSON.parse(localStorage.getItem('container')) || [];
    let nome = '';
    let total = 0;

    // Obter o nome do primeiro item e o total
    if (carrinho.length > 0) {
        nome = carrinho.map(item => item.nome).join(', '); // Nome dos produtos separados por vírgula
        total = carrinho.reduce((acc, item) => acc + (item.valor * item.quantidade), 0); // Soma o valor total considerando a quantidade
    }

    // Redireciona para a página compra.php com os parâmetros nome e total na URL
    const generatedUrl = `./compra.php?nome=${encodeURIComponent(nome)}&total=${encodeURIComponent(total.toFixed(2))}`;
    
    // Prevent URL manipulation
    if (total > 0) {
        window.location.href = generatedUrl;
    } else {
        console.error("Total inválido, redirecionamento não realizado.");
    }
}
    </script>
    <script src="./js/pag3.js"></script>
</body>
</html>
