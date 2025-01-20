USE funeraria_agricultor;

DROP TABLE IF EXISTS vendas;
DESCRIBE vendas;

CREATE TABLE vendas (
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    cep VARCHAR(10) NOT NULL,
    metodo_pagamento VARCHAR(50) NOT NULL,
    card_number VARCHAR(20),
    card_validity VARCHAR(7),
    card_cvv VARCHAR(4),
    card_brand VARCHAR(20),
    valor_total DECIMAL(10, 2) NOT NULL,
    data_venda DATETIME NOT NULL,
    tracking_number VARCHAR(50), -- New column for tracking number
    chave_pix VARCHAR(100) -- New column for chave pix
);
drop table vendas;
truncate table vendas;
select * from vendas;