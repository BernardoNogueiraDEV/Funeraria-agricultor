<?php
function validarCartao($numeroCartao) {
    // Verifica se o número do cartão contém apenas números e tem entre 13 a 19 dígitos
    if (!preg_match('/^\d{13,19}$/', $numeroCartao)) {
        return ['valido' => false, 'erro' => 'Número de cartão inválido.'];
    }

    // Definindo os padrões de regex para cada bandeira
    $bandeiras = [
        'Visa' => '/^4[0-9]{12}(?:[0-9]{3})?/', // Visa
        'Mastercard' => '/^5[1-5][0-9]{14}/', // Mastercard
        'Amex' => '/^3[47][0-9]{13}/', // American Express
        'DinersClub' => '/^3(?:0[0-5]|[68][0-9])[0-9]{11}/', // Diners Club
        'Discover' => '/^6(?:011|5[0-9]{2})[0-9]{12}/', // Discover
        'JCB' => '/^(?:2131|1800|35\d{3})\d{11}/' // JCB
    ];

    // Verificar a bandeira com base no número do cartão
    foreach ($bandeiras as $bandeira => $pattern) {
        if (preg_match($pattern, $numeroCartao)) {
            return [
                'valido' => true,
                'bandeira' => $bandeira,  // Nome da bandeira
                'imagem_bandeira' => '' // URL da imagem da bandeira pode ser adicionada se necessário
            ];
        }
    }

    return ['valido' => false, 'erro' => 'Bandeira desconhecida.'];
}

// Recebe o número do cartão via GET
if (isset($_GET['numeroCartao'])) {
    $numeroCartao = $_GET['numeroCartao'];
    echo json_encode(validarCartao($numeroCartao));
} else {
    echo json_encode(['valido' => false, 'erro' => 'Número de cartão não fornecido.']);
}
?>
