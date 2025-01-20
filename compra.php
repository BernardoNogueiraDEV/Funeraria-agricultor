<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['endereco'] = [
        'nome_cliente' => $_POST['nome_cliente'],
        'rua' => $_POST['rua'],
        'numero' => $_POST['numero'],
        'bairro' => $_POST['bairro'],
        'cidade' => $_POST['cidade'],
        'estado' => $_POST['estado'],
        'cep' => $_POST['cep'],
    ];
    header('Location: ./rastreamento.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <style>
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
        .payment-option {
            margin-bottom: 30px;
        }
        .payment-option input {
            margin-right: 10px;
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
        .summary-total {
            font-size: 26px;
            font-weight: bold;
            margin-top: 30px;
            color: #556d86;
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
        .pix-code {
            display: none; /* Hidden by default */
            margin-top: 20px;
            font-size: 20px;
            color: #007bff;
        }
        .card-brand {
            margin-top: 20px;
        }
        .card-brand img {
            height: 50px;
        }
    </style>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    const nome = params.get('nome');
    const preco = params.get('valor');
    const total = params.get('total');

    const nomeDisplay = document.getElementById('item_nome_display');
    const precoDisplay = document.getElementById('item_preco_display');
    const totalDisplay = document.getElementById('total_display');

    if (nomeDisplay) nomeDisplay.innerText = nome || "Item não especificado";
    if (precoDisplay) precoDisplay.innerText = preco || "0.00";
    if (totalDisplay) totalDisplay.innerText = total || "0.00";

    const paymentOptions = document.querySelectorAll('input[name="payment"]');
    paymentOptions.forEach(option => {
        option.addEventListener('change', updateSummary);
    });

    function updateSummary() {
        const selectedMethod = document.querySelector('input[name="payment"]:checked');
        const method = selectedMethod ? selectedMethod.value : 'Nenhum método selecionado';
        const summary = document.querySelector('.summary-card');

        if (summary) {
            summary.innerHTML = `
                <h3>Resumo do Pedido</h3>
                <p>Itens: ${nome || "Desconhecido"}</p>
                <p>Frete: R$ 0,00</p>
                <p>Método: ${method}</p>
                <p class="summary-total">Total: R$ ${total || "0.00"}</p>
            `;
        } else {
            console.error("Elemento '.summary-card' não encontrado no DOM.");
        }

        // Show PIX code if PIX is selected
        const pixCodeDisplay = document.getElementById('pix-code-display');
        if (selectedMethod && selectedMethod.value === 'pix') {
            pixCodeDisplay.style.display = 'block';
            pixCodeDisplay.innerText = 'Código PIX: 1234-5678-9012'; // Example PIX code
        } else {
            pixCodeDisplay.style.display = 'none';
        }
    }

    updateSummary();
});

document.addEventListener('DOMContentLoaded', function() {
    const cepInput = document.getElementById('cep');
    const confirmButton = document.getElementById('confirmarCompra'); // Botão de confirmação
    
    cepInput.addEventListener('blur', function() {
        const cep = cepInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        
        if (cep.length === 8) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => {
                    if (!response.ok) throw new Error('Erro ao buscar o CEP');
                    return response.json();
                })
                .then(data => {
                    if (data.erro) {
                        alert('CEP não encontrado.');
                        return;
                    }
                    document.getElementById('cidade').value = data.localidade || '';
                    document.getElementById('estado').value = data.uf || '';
                })
                .catch(error => {
                    console.error('Erro ao buscar CEP:', error);
                    alert('Erro ao buscar o CEP. Tente novamente.');
                });
        } else if (cep) {
            alert('Digite um CEP válido com 8 dígitos.');
        }
    });

    confirmButton.addEventListener('click', function(event) {
        const cartao = document.getElementById('cartao').value.trim();
        const pix = document.getElementById('pix').checked;
        const boleto = document.getElementById('boleto').checked;

        // Verifica se nenhuma opção foi escolhida
        if (!cartao && !pix && !boleto) {
            event.preventDefault(); // Impede o envio do formulário
            alert('Por favor, preencha os dados do cartão ou selecione PIX ou Boleto para continuar.');
            return;
        }

        // Se o campo de cartão for selecionado, valida se está preenchido
        if (cartao && !pix && !boleto) {
            const cardInputs = document.getElementById('card-inputs');
            if (!cardInputs.querySelector('#card-number').value || 
                !cardInputs.querySelector('#card-validity').value || 
                !cardInputs.querySelector('#card-cvv').value) {
                event.preventDefault(); // Impede o envio do formulário
                alert('O campo do cartão não pode estar vazio.');
                return;
            }
        }
    });
});

//4092 8001 3696 1954

document.addEventListener('DOMContentLoaded', function () {
    // Garantir que os elementos estejam carregados
    const cardNumberInput = document.getElementById("card-number");
    const cardValidityInput = document.getElementById("card-validity");
    const cardCvvInput = document.getElementById("card-cvv");
    const cardBrandDiv = document.getElementById("card-brand");

    // Verificar se os elementos existem antes de adicionar os event listeners
    if (cardNumberInput) {
        cardNumberInput.addEventListener("input", function() {
            validateCard(cardNumberInput.value, cardBrandDiv);
        });
    }

    if (cardValidityInput) {
        cardValidityInput.addEventListener("input", function() {
            formatValidity(cardValidityInput);
        });
    }

    if (cardCvvInput) {
        cardCvvInput.addEventListener("input", function() {
            validateCVV(cardCvvInput);
        });
    }
});

function validateCard() {
    const cardNumber = document.getElementById('card-number');
    const cardBrand = document.getElementById('card-brand');
    const visaRegex = /^4[0-9]{12}(?:[0-9]{3})/;
    const masterRegex = /^5[1-5][0-9]{14}/;
    const eloRegex = /^(636368|438935|504175|451416|509048|509067|509049|509069|509050|509074|509068|509045|509051|509046|509066|509047|509042|509052|509043|509064|36297[8-9]|36299[0-9])/;
    const debitRegex = /^(4011|5100|6011|622126|622925|6362|5060|4175|4576)/; // Expressão regular para débito

    // Remove todos os caracteres não numéricos
    const cleanedNumber = cardNumber.value.replace(/\D/g, '');

    // Formata o número do cartão com espaços
    cardNumber.value = cleanedNumber.replace(/(.{4})/g, '$1 ').trim();

    // Verifica a bandeira e tipo do cartão
    if (visaRegex.test(cleanedNumber)) {
        cardBrand.innerHTML = '<img src="./imagens/visa.png" alt="Visa"> Cartão de Crédito';
    } else if (masterRegex.test(cleanedNumber)) {
        cardBrand.innerHTML = '<img src="./imagens/mastercard.png" alt="Mastercard"> Cartão de Crédito';
    } else if (eloRegex.test(cleanedNumber)) {
        cardBrand.innerHTML = '<img src="./imagens/elo.png" alt="Elo"> Cartão de Crédito';
    } else if (debitRegex.test(cleanedNumber)) {
        cardBrand.innerHTML = '<img src="./imagens/debito.png" alt="Débito"> Cartão de Débito';
    } else {
        cardBrand.innerHTML = 'Cartão inválido';
    }
}

// Função para formatar a validade (MM/AA)
function formatValidity(input) {
    let value = input.value.replace(/\D/g, "");

    if (value.length >= 2) {
        value = value.slice(0, 2) + "/" + value.slice(2, 4);
    }

    input.value = value;
}

// Função para validar o CVV
function validateCVV(input) {
    let value = input.value.replace(/\D/g, "");

    // Limita a 3 caracteres
    if (value.length > 3) {
        value = value.slice(0, 3);
    }

    input.value = value;
}
    </script>
</head>
<body>
    <div class="container">
        <div class="main-content">
            <form id="purchase-form" method="POST" action="./php/enviar.php">
                <div class="section">
                    <div class="section-title">Endereço de Entrega</div>
                    <div class="input-field">
                        <input type="text" id="nome-cliente" name="nome_cliente" placeholder="Nome" required>
                    </div>
                    <div class="input-field">
                        <input type="text" id="rua" name="rua" placeholder="Rua" required>
                        <input type="text" id="numero" name="numero" placeholder="Número" required>
                    </div>
                    <div class="input-field">
                        <input type="text" id="bairro" name="bairro" placeholder="Bairro" required>
                    </div>
                    <div class="input-field">
                        <input type="text" id="cidade" name="cidade" placeholder="Cidade" required>
                        <input type="text" id="estado" name="estado" placeholder="Estado" required>
                    </div>
                    <div class="input-field">
                        <input type="text" id="cep" name="cep" placeholder="CEP" required>
                    </div>
                </div>
                <div class="section">
                    <div class="section-title">Método de Pagamento</div>
                    <div class="payment-option">
                        <input type="radio" id="cartao" name="payment" value="cartao" required>
                        <label for="cartao">Cartão</label>
                        <div class="input-field" id="card-inputs" style="display: none;">
                            <input type="text" id="card-number" name="card_number" placeholder="Número do cartão" maxlength="19">
                            <input type="text" id="card-validity" name="card_validity" placeholder="Validade (MM/AA)" maxlength="5">
                            <input type="text" id="card-cvv" name="card_cvv" placeholder="CVV" maxlength="3">
                        </div>
                        <div class="card-brand" id="card-brand"></div>
                    </div>
                    <div class="payment-option">
                        <input type="radio" id="pix" name="payment" value="pix" required>
                        <label for="pix">Pix</label>
                        <div id="pix-code-display" class="pix-code">Código PIX: <span id="pix-code"></span></div>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="confirm-button">Confirmar Compra</button>
                    </div>
                </div>
                <div class="summary-card">
                    <h3>Resumo do Pedido</h3>
                    <p>Itens: <span id="item_nome_display"></span></p>
                    <p>Preço: <span id="item_preco_display"></span></p>
                    <p>Frete: R$ 0,00</p>
                    <p>Método: <span id="payment_method_display"></span></p>
                    <p class="summary-total">Total: R$ <span id="total_display"></span></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.querySelectorAll('input[name="payment"]').forEach(option => {
            option.addEventListener('change', function() {
                const cardInputs = document.getElementById('card-inputs');
                if (this.value === 'cartao') {
                    cardInputs.style.display = 'flex';
                    cardInputs.querySelector('#card-number').setAttribute('required', 'required');
                    cardInputs.querySelector('#card-validity').setAttribute('required', 'required');
                    cardInputs.querySelector('#card-cvv').setAttribute('required', 'required');
                } else {
                    cardInputs.style.display = 'none';
                    cardInputs.querySelector('#card-number').removeAttribute('required');
                    cardInputs.querySelector('#card-validity').removeAttribute('required');
                    cardInputs.querySelector('#card-cvv').removeAttribute('required');
                }
            });
        });
    </script>
</body>
</html>
