CREATE DATABASE funeraria_agricultor;
USE funeraria_agricultor;

CREATE TABLE vendas (
    id_venda INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único para a venda
    nome_cliente VARCHAR(100) NOT NULL,      -- Nome do cliente
    rua VARCHAR(150) NOT NULL,               -- Rua do endereço
    numero VARCHAR(10) NOT NULL,             -- Número do endereço
    bairro VARCHAR(100) NOT NULL,            -- Bairro do endereço
    cidade VARCHAR(100) NOT NULL,            -- Cidade do endereço
    estado VARCHAR(50) NOT NULL,             -- Estado do endereço
    cep VARCHAR(15) NOT NULL,                -- CEP do endereço
    metodo_pagamento ENUM('cartao_credito', 'cartao_debito', 'pix', 'boleto') NOT NULL, -- Método de pagamento
    card_number VARCHAR(20),               -- Número do cartão (parcial ou mascarado)
    card_validity VARCHAR(5),              -- Validade do cartão (MM/AA)
    card_cvv VARCHAR(3),                   -- CVV do cartão
    valor_total DECIMAL(10, 2) NOT NULL,     -- Valor total da compra
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data e hora da venda
);
drop TABLE vendas;
SELECT * from vendas;
TRUNCATE vendas;