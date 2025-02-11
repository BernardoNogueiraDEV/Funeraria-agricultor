<?php
session_start();
$email = isset($_GET['email']) ? $_GET['email'] : null;

// Salve o e-mail na sessão para usá-lo no envio de e-mail posteriormente
if ($email) {
    $_SESSION['user_email'] = $email;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funerária Agricultor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">
</head>

<body>
    <!--Pagina 1-->
    <div class="pag1">

        <!--Imagem da Pagina 1-->
        <img src="imagens/Funerária Agricultor.png" alt="" loading="lazy" class="fundo">

        <!--Título e Slogan-->
        <div class="inicio" >
            <h1 class="titulo">Funerária <br> Agricultor</h1>
            <h2>"A 30 anos, plantando o homem na terra"</h2>

            <!--Botão de conhecer-->
            <button class="botão_conhecer" id="botao_conhecer">Venha nos conhecer!</button>
            <div class="modal" id="modal">
                <div class="modal-content">
                    <button class="close-button" id="fechar_modal">&times;</button>
                    <!-- Área do iframe para o vídeo -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9StAOJtQeDM?si=5tzAXoAAtRWvPNrE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!--Rodapé-->
            <header id="header">

                <div class="alinhar_rodape">
                    <label class="hamburger">
                        <input type="checkbox" id="menu">
                        <svg viewBox="0 0 32 32" >
                            <path class="line line-top-bottom"
                                d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
                            </path>
                            <path class="line" d="M7 16 27 16"></path>
                        </svg>
                    </label>

                    <nav id="navegacao">
                        <ul>
                            <a href="#" id="conta">Conta</a>
                            <div id="info-conta">
                                <span>Nome: <?php echo $_SESSION['nome']; ?></span><br>
                                <span>Email: <?php echo $_SESSION['email']; ?></span><br>
                                <span><a href="./rastreamento.php" class="botaoRastreamento">Rastreamento</a></span>
                                <form action="./php/logout.php" method="post" style="display: inline;">
                                    <button type="submit" style="background-color: #333; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </ul>

                        <ul>
                            <a href="#caixao">Caixões</a>
                        </ul>

                        <ul>
                            <a href="#flores">Flores</a>
                        </ul>

                        <ul>
                            <a href="#pag5">Buffet</a>
                        </ul>

                        <ul>
                            <a href="#quemsomos">Quem somos</a>
                        </ul>

                        <ul>
                            <a href="#suporte">Suporte</a>
                        </ul>

                        <ul>
                            <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar no site" style="padding-left: 10px;">
                        </ul>
                    </nav>

                </div>

            </header>
        </div>

    </div>

    <div class="pag2" >
        <div class="img2">
            <img src="https://img.freepik.com/fotos-gratis/ainda-vida-de-crucifixo-com-livro_23-2149344464.jpg?uid=R122362105&ga=GA1.1.316540012.1732572958&semt=ais_hybrid" loading="lazy" alt="Cruz em um fundo desfocado" class="imagem2">
        </div>
        <div class="conteudo" id="quemsomos">
            <h1>Quem Somos</h1>
            <p><strong>A 30 anos, plantando o homem na terra.</strong></p>
            <p>Somos uma empresa dedicada a proporcionar conforto e suporte em momentos difíceis, cuidando de todos os
                detalhes necessários para honrar e celebrar a vida de quem partiu. Nosso objetivo é oferecer um
                atendimento humanizado, aliado à excelência em serviços funerários, para que você e sua família tenham
                serenidade e amparo nos momentos que mais importam.</p>

            <h1>Nossa Missão</h1>
            <p>Acolher famílias com respeito, empatia e profissionalismo, garantindo um serviço de qualidade que
                preserve memórias e tradições. Trabalhamos para tornar cada despedida digna, tranquila e personalizada,
                oferecendo suporte integral desde o primeiro contato até o encerramento das cerimônias.</p>

            <h1>Nossos Serviços</h1>
            <ul>
                <li>Organização de cerimônias personalizadas.</li>
                <li>Buffet para velórios com opções variadas.</li>
                <li>Ampla seleção de caixões e arranjos florais.</li>
                <li>Atendimento 24h, transporte e documentação.</li>
                <li>Planos funerários acessíveis e personalizados.</li>
            </ul>
            <p><strong>Cuidamos de tudo para que você possa se concentrar nas homenagens ao ente querido.</strong></p>

            <h1>Nossa Equipe</h1>
            <p>Contamos com uma equipe dedicada, formada por profissionais capacitados e acolhedores, que entendem a
                importância de atender cada cliente com discrição, respeito e sensibilidade. Nosso compromisso é
                garantir que você receba o suporte necessário em todas as etapas, sempre com atenção aos mínimos
                detalhes.</p>
        </div>
    </div>


    <div class="pag3" >
        <img src="./imagens/wood-material-background-wallpaper-texture-concept.jpg" loading="lazy" alt="fundo3" class="fundo3">

        <h1 class="caixoesPag3" id="caixao">Caixões</h1>

        <div class="caixoesCarrossel">
            <div class="carousel">
                <div class="card visible" >
                    <div class="image_container">
                        <img loading="lazy" class="image" src="./imagens/transferir.jpg">
                    </div>

                    <div class="title">
                        <span>Caixão Básico 1</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular com uma leve afunilação nas extremidades superiores e inferiores. <br>
                            <strong>Material:</strong> Madeira em tom marrom escuro com textura amadeirada, bem polida e envernizada para realçar o acabamento. <br>
                            <strong>Alças:</strong> Feitas de madeira com detalhes metálicos para reforço ou fixação, projetadas para funcionalidade e estética simples. <br>
                            <strong>Tampa:</strong> Também em madeira marrom escura, envernizada, com encaixe simples e acabamento discreto. <br>
                            <strong>Interior:</strong> Pode ser forrado com tecido branco ou bege, em algodão ou poliéster, sem ornamentos sofisticados. <br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 750,00</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Básico 1" data-valor="750.00" data-total="750.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Básico 1" data-valor="750.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>

                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" loading="lazy" loading="lazy" loading="lazy" loading="lazy" loading="lazy" loading="lazy" class="image" src="./imagens/Caixão_2.png">
                    </div>

                    <div class="title">
                        <span>Caixão Básico 2</span>
                    </div>

                    <div class="description">
                        <p>
                            <br> <br>
                            <strong>Formato:</strong> Retangular, com superfície vernizada e com acabamento externo. <br>
                            <strong>Material:</strong> Madeira pinho semdetalhes decorativos. <br>
                            <strong>Alças:</strong> Feita de madeira colocadas nas laterais, para facilitar o transporte.<br>
                            <strong>Tampa:</strong> De forma plana e com fechos simples,visando a fácil abertura.<br>
                            <strong>Interior:</strong> Forro acolchoado em tecido de cetim de cor cinza.<br> <br> <br>  <br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 550,00</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Básico 2" data-valor="550.00" data-total="550.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Básico 2" data-valor="550.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" loading="lazy" loading="lazy" loading="lazy" loading="lazy" loading="lazy" class="image" src="./imagens/Caixão_3-removebg-preview.png">
                    </div>

                    <div class="title">
                        <span>Caixão Básico 3</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong>  Retangular com bordas arredondadas.<br>
                            <strong>Material:</strong>  Madeira de pinho, com acabamento liso e simples. <br>
                            <strong>Alças:</strong> Alças metálicas de barra simples, com acabamento em cromo.<br>
                            <strong>Tampa:</strong> Plana, com fechos de metal. <br>
                            <strong>Interior:</strong> Forrado com tecido de algodão na cor bege. <br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 950,00</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Básico 3" data-valor="950.00" data-total="950.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Básico 3" data-valor="950.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" loading="lazy" loading="lazy" loading="lazy" loading="lazy" class="image" src="./imagens/Caixão_4.jpg">
                    </div>

                    <div class="title">
                        <span>Caixão Básico 4</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular com linhas retas e cantos definidos.<br>
                            <strong>Material:</strong> MDF, revestido com aparência de madeira.                            <br>
                            <strong>Alças:</strong>  Alças de madeira pintadas, com acabamento básico.<br>
                            <strong>Tampa:</strong>  Plana e lisa.<br>
                            <strong>Interior:</strong> Forro de tecido sintético, na cor clara. <br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 650,00</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Básico 4" data-valor="650.00" data-total="650.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Básico 4" data-valor="650.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" loading="lazy" loading="lazy" loading="lazy" class="image" src="./imagens/Premium_1.jpg">
                    </div>

                    <div class="title">
                        <span>Caixão Premium 1</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular com bordas mais suaves.                            <br>
                            <strong>Material:</strong> Compensado natural, com acabamento rústico, com verniz.                            <br>
                            <strong>Alças:</strong> Alças de material resistente, presas por furos no caixão.<br>
                            <strong>Tampa:</strong> Levemente inclinada para um visual mais simples.<br>
                            <strong>Interior:</strong>  Forro de tecido sintético, com um acolchoado básico. <br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 999,90</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Premium 1" data-valor="999.90" data-total="999.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Premium 1" data-valor="999.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" loading="lazy" loading="lazy" class="image" src="./imagens/Premium_2.jpg">
                    </div>

                    <div class="title">
                        <span>Caixão Premium 2</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular, com bordas arredondadas e acabamento sofisticado.                            <br>
                            <strong>Material:</strong> Madeira nobre, com acabamento polido e brilhante.                            <br>
                            <strong>Alças:</strong> Alças metálicas douradas, com design ornamentado e acabamento refinado, integradas de forma discreta nas laterais. <br>
                            <strong>Tampa:</strong> Plana, com bordas delicadamente trabalhadas e detalhes dourados, como molduras elegantes.<br>
                            <strong>Interior:</strong> Forro luxuoso de veludo de cetim em tom claro.<br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 1600,58</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Premium 2" data-valor="1600.58" data-total="1600.58" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Premium 2" data-valor="1600.58">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" loading="lazy" class="image" src="./imagens/Premium_3.jpg">
                    </div>

                    <div class="title">
                        <span>Caixão Premium 3</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular, com linhas suaves e contornos elegantes. <br>
                            <strong>Material:</strong> Madeira de alta qualidade, com acabamento polido e textura suave ao toque.                            <br>
                            <strong>Alças:</strong> Alças metálicas douradas, com design e acabamento impecável, fixadas nas laterais com suportes.<br>
                            <strong>Tampa:</strong> Levemente inclinada, com moldura trabalhada em dourado e detalhes sutis, oferecendo um visual sofisticado.<br>
                            <strong>Interior:</strong>  Revestido com tecido veludo de alta qualidade.<br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 2050,00</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Premium 3" data-valor="2050.00" data-total="2050.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Premium 3" data-valor="2050.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" class="image" src="./imagens/premium_4.png">
                    </div>

                    <div class="title">
                        <span>Caixão Premium 4</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong>  Retangular, com bordas suaves e um design refinado. <br>
                            <strong>Material:</strong> Madeira de excelente qualidade, com acabamento lustroso e textura polida. <br>
                            <strong>Alças:</strong> Alças metálicas douradas, com um estilo clássico e acabamento polido, firmemente fixadas nas laterais do caixão. <br>
                            <strong>Tampa:</strong>  Levemente inclinada, adornada com finos detalhes dourados.<br>
                            <strong>Interior:</strong> Alças metálicas douradas, com um estilo clássico e acabamento polido, firmemente fixadas nas laterais do caixão.<br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 3568,70</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Premium 4" data-valor="3568.70" data-total="3568.70" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Premium 4" data-valor="3568.70">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" loading="lazy" class="image" src="./imagens/Luxo_1.jpg">
                    </div>

                    <div class="title">
                        <span>Caixão Luxo 1</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular, com linhas suaves e contornos elegantes.<br>
                            <strong>Material:</strong> Madeira de alta qualidade, com acabamento polido na cor prata e textura suave ao toque. <br>
                            <strong>Alças:</strong> Alças metálicas douradas, com design esculpido e acabamento impecável, fixadas nas laterais com suportes robustos.<br>
                            <strong>Tampa:</strong> Levemente inclinada, com moldura trabalhada em dourado e detalhes sutis, oferecendo um visual sofisticado. <br>
                            <strong>Interior:</strong> Revestido com tecido de cetim. Inclui um travesseiro forrado com o mesmo tecido, garantindo conforto e elegância. <br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 6599,90</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Luxo 1" data-valor="6599.90" data-total="6599.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Luxo 1" data-valor="6599.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" class="image" src="./imagens/luxo2.png">
                    </div>

                    <div class="title">
                        <span>Caixão Luxo 2</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular, com contornos suaves. <br>
                            <strong>Material:</strong> Estrutura de madeira de alta qualidade, revestida com acabamento dourado brilhante, proporcionando um toque de sofisticação e brilho luxuoso. <br>
                            <strong>Alças:</strong> Alças metálicas douradas com um design moderno e elegante, perfeitamente integradas à estrutura do caixão para um transporte seguro.<br>
                            <strong>Tampa:</strong> Plana, com um leve acabamento dourado nas bordas, destacando o revestimento e conferindo um visual elegante. <br>
                            <strong>Interior:</strong> orro em tecido de veludo de alta gama, na cor azul profundo, criando um contraste elegante com o revestimento dourado. Inclui um travesseiro forrado com o mesmo veludo azul, dando um toque de luxo e suavidade.<br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 9999,90</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Luxo 2" data-valor="9999.90" data-total="9999.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Luxo 2" data-valor="9999.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" loading="lazy" class="image" src="./imagens/Luxo_3.jpg">
                    </div>

                    <div class="title">
                        <span>Caixão Luxo 3</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular, com linhas suaves. <br>
                            <strong>Material:</strong> Estrutura em madeira de alta qualidade, revestida com acabamento laranja profundo, criando um visual mais elegante.<br>
                            <strong>Alças:</strong> Alças metálicas douradas, com acabamento polido, integradas discretamente às laterais do caixão.<br>
                            <strong>Tampa:</strong> Plana, com bordas delicadamente trabalhadas e o acabamento laranja destacado, oferecendo um design moderno e atraente.<br>
                            <strong>Interior:</strong> Forro luxuoso de veludo ou cetim na cor branca. Inclui um travesseiro forrado com o mesmo tecido, garantindo um toque suave e elegante.<br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 5699,00</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Luxo 3" data-valor="5699.00" data-total="5699.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Luxo 3" data-valor="5699.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
                <div class="card" >
                    <div class="image_container">
                        <img loading="lazy" class="image" src="./imagens/Luxo_4.jpg">
                    </div>

                    <div class="title">
                        <span>Caixão Luxo 4</span>
                    </div>

                    <div class="description">
                        <p>
                            <strong>Formato:</strong> Retangular, com linhas elegantes e um design que exala sofisticação. <br>
                            <strong>Material:</strong> Estrutura de madeira de alta qualidade, revestida com acabamento roxo profundo, que confere um visual único e imponente, ao mesmo tempo moderno e refinado.<br>
                            <strong>Alças:</strong> Alças metálicas prateadas, com acabamento polido e design clássico, perfeitamente integradas às laterais para garantir um transporte seguro e estiloso.<br>
                            <strong>Tampa:</strong> Plana, com bordas suaves e detalhes discretos que destacam o tom vibrante do roxo, criando uma estética luxuosa e distinta.<br>
                            <strong>Interior:</strong> Forro de veludo ou cetim branco, proporcionando um contraste elegante com o exterior roxo. O interior é generosamente acolchoado, oferecendo conforto, e inclui um travesseiro forrado com o mesmo tecido branco, criando um toque de suavidade e requinte. <br>
                        </p>
                    </div>

                    <div class="price">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 8958,90</p>
                        <p class="desconto"></p>
                    </div>

                    <div class="comprar">
                        <button class="cart-button" data-nome="Caixão Luxo 4" data-valor="8958.90" data-total="8958.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Caixão Luxo 4" data-valor="8958.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
                    
                </div>
            </div>


        </div>
        <button class="prev" onclick="prevSlide()">&#8249;</button>
        <button class="next" onclick="nextSlide()">&#8250;</button>

    </div>
    
    <div class="mensagem" >
        <div class="texto-mensagem">
            <h1>Cadastre seu email para receber promoções e atualizações!!</h1>
        </div>
        <form action="./php/register.php" method="post">
            <div class="mensagem-texto">
                <input type="email" name="email" id="email" placeholder="Digite seu email">
                <button type="submit" class="enviar">Enviar</button>
            </div>
        </form>

    </div>

    <div class="pag4" >
        
        <h1 id="flores">Flores</h1>

        <div class="card-flores" >
            <div class="escolhaCoroaH1">
                <h1>Escolha o tipo de flor</h1>
            </div>
            <div class="radio">
                

                    <div class="escolher_flor">
                        <input type="radio" name="tipo_flor" id="tipo_flor" value="coroa">
                        <label for="tipo_flor">Coroa</label>
                    </div>

                    <div  class="escolher_flor">
                        <input type="radio" name="tipo_flor" id="tipo_flor2" value="ramalhete">
                        <label for="tipo_flor2">Ramalhete</label>
                    </div>

                    <div>
                        <div class="escolhaEstilo">
                            <h6>Escolha o estilo</h1>
                        </div>
                    </div>
                    
                    <div>
                        <input type="radio" name="tipo_coroa" id="tradicional" value="tradicional">
                        <label for="tradicional">Tradicional</label> 
                    </div>
                    
                    <div>
                        <input type="radio" name="tipo_coroa" id="minimalista" value="minimalista">
                        <label for="minimalista">Minimalista</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tipo_coroa" id="religiosa" value="religiosa">
                        <label for="religiosa">Religiosa</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="tipo_coroa" id="branca" value="branca">
                        <label for="branca">Exclusiva em Branco</label>
                    </div>

                    <div>
                        <input type="radio" name="tipo_coroa" id="colorido" value="colorida">
                        <label for="colorido">Colorido</label>
                    </div>
                    
                    <button class="pesquisarCoroa" onclick="atualizarExibicao()">Escolher</button>
                
            </div>
            
        </div>
    
    </div>

    <div class="card-flores-tradicional" style="display: none;" id="card-tradicional" >

        <button class="close-button" onclick="close_butao()">X</button>

        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/coroaRosaBranco.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Tradicional 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            A coroa é feita com flores suaves em tons de rosa e amarelo, com ramos verdes ao redor, criando harmonia e um toque natural. O rosa simboliza ternura e compaixão, o amarelo traz luz e lembrança calorosa, e o verde das folhagens transmite renovação e serenidade. A forma circular da coroa representa continuidade e eternidade, mantendo viva a memória do ente querido. Os ramos verdes são elegantemente dispostos ao redor das flores, servindo como uma moldura natural.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 350,00</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Tradicional 1" data-valor="350.00" data-total="350.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Tradicional 1" data-valor="350.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/coroaVermelhaBranca.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Tradicional 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            A coroa é composta por flores brancas e folhagens verdes escuras, criando um arranjo vibrante e harmonioso. O branco simboliza a paz, o vermelho transmite amor e respeito, e o verde das folhagens representa a renovação e a continuidade da vida. A coroa é circular, simbolizando a eternidade e a continuidade, representando o ciclo da vida e o amor eterno. As folhagens verdes contrastam com as flores coloridas, proporcionando profundidade e equilíbrio.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 390,00</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Tradicional 2" data-valor="390.00" data-total="390.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Tradicional 2" data-valor="390,00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>


            </div>

        </div>

    </div>




    <div class="card-flores-minimalista" style="display: none;" id="card-minimalista" >
        <button class="close-button" onclick="close_butao()">X</button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/coroaRosaBrancaMinimalista.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Minimalista 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            A coroa é formada por flores suaves e elegantes, como rosas e pétalas brancas, combinadas com flores de tom rosa claro, criando um contraste delicado e sereno. O branco simboliza a paz, a pureza e a memória eterna, enquanto o rosa transmite sentimentos de carinho, compaixão e respeito. Juntas, essas cores refletem harmonia e suavidade, trazendo conforto e serenidade. A coroa é disposta de maneira circular, que representa a memória constante do ente querido e a ideia de que o amor transcende o tempo. Folhas verdes discretas são usadas para moldar as flores, realçando suas cores e conferindo um toque de frescor ao arranjo, sem tirar a suavidade do conjunto.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 480,00</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Minimalista 1" data-valor="480.00" data-total="480.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Minimalista 1" data-valor="480,00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/coroaGirassol.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Minimalista 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            A coroa é formada por girassóis vibrantes, flores brancas delicadas e folhagens verdes escuras, criando uma combinação harmoniosa de cores. O amarelo intenso dos girassóis traz uma sensação de luz, enquanto o branco das outras flores simboliza a paz. A coroa possui um formato circular, simbolizando a eternidade e a continuidade da vida e das memórias do ente querido. As folhagens verdes destacam as flores, dando uma sensação de frescor e equilíbrio visual, ao mesmo tempo que proporcionam profundidade ao arranjo.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 550,00</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Minimalista 2" data-preco="550.00" data-total="550.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Minimalista 2" data-preco="550,00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>



    <div class="card-flores-religiosa" style="display: none;" id="card-religiosa" >
        <button class="close-button" onclick="close_butao()"></button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/coroaReligiosa2.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Religiosa 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            Essa coroa de flores é elaborada com flores brancas de alta qualidade, cuidadosamente selecionadas. Seu design especial em forma de anjo confere um simbolismo único, transmitindo uma mensagem de conforto e proteção. O branco predominante das flores representa paz, pureza e respeito. A coroa em forma de anjo é projetada para homenagear de forma delicada e significativa, com asas compostas por flores brancas dispostas. As folhagens verdes e discretas servem como base, destacando a delicadeza das flores brancas.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 654,10</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Religiosa 1" data-valor="654.10" data-total="654.10" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Religiosa 1" data-valor="654,10">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/coroaReligiosa1.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Religiosa 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            Esta coroa de flores em forma de cruz é composta por flores brancas selecionadas com cuidado para transmitir pureza e serenidade. O branco predominante simboliza paz, pureza e espiritualidade, conferindo ao arranjo uma atmosfera de tranquilidade e respeito, refletindo sentimentos de luto e homenagem. Com um design em forma de cruz, a coroa expressa simbolismo religioso e espiritual. As flores são dispostas de maneira equilibrada e simétrica, criando um formato nobre e reconfortante que destaca a simplicidade e a elegância do arranjo. Folhagens verdes e amarelas suaves complementam as flores, adicionando um contraste natural que valoriza a composição sem sobrecarregar.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 589,90</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Religiosa 2" data-valor="589.90" data-total="589.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Religiosa 2" data-valor="589.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>



    <div class="card-flores-Exclusiva-em-branco" style="display: none;" id="card-branca" >
        <button class="close-button" onclick="close_butao()">X</button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/coroaBranca1.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Branca 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            A cor branca simboliza paz e respeito, enquanto os detalhes em verde adicionam um toque de esperança e naturalidade. A coroa possui um formato circular clássico, representando continuidade e eternidade. As flores e folhagens são dispostas de maneira harmoniosa, criando um equilíbrio visual que reflete serenidade e elegância. As folhagens verdes destacam as flores brancas, criando um contraste suave e natural. Os tons de verde adicionam textura e profundidade ao arranjo, reforçando sua beleza sem perder a simplicidade.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 519,99</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Branca 1" data-valor="519.99" data-total="519.99" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Branca 1" data-valor="519.99">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/CoroaBranca2.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Branca 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            A coroa é formada por girassóis vibrantes, flores brancas delicadas e folhagens verdes escuras, criando uma combinação harmoniosa de cores. O amarelo intenso dos girassóis traz uma sensação de luz, enquanto o branco das outras flores simboliza a paz. A coroa possui um formato circular, simbolizando a eternidade e a continuidade da vida e das memórias do ente querido. As folhagens verdes destacam as flores, dando uma sensação de frescor e equilíbrio visual, ao mesmo tempo que proporcionam profundidade ao arranjo.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 559,99</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Branca 2" data-valor="559.99" data-total="559.99" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Branca 2" data-valor="559.99">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>




    <div class="card-flores-colorida" style="display: none;" id="card-colorida" >
        <button class="close-button" onclick="close_butao()"></button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/coroaColorida1.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Colorida 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            A cor rosa representa amor e carinho, enquanto o amarelo simboliza conforto. As folhagens verdes trazem equilíbrio e esperança, complementando a composição das flores. A coroa possui um formato de coração, um símbolo universal de amor e devoção, com flores organizadas de maneira cuidadosa e simétrica para destacar o desenho. As folhagens verdes contornam e preenchem o formato do coração, criando um contraste suave com as flores rosa e amarelas. Elas adicionam profundidade e textura ao arranjo, reforçando sua beleza e simplicidade sem tirar o foco das cores vibrantes das flores.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 899,00</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Colorida 1" data-valor="899.00" data-total="899.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Colorida 1" data-valor="899.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/CoroaColorida2.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Coroa Colorida 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            A coroa é composta por dois elementos principais: um buquê vermelho intenso e um grande buquê vertical que combina flores brancas, vermelhas e folhagens verdes. Esses elementos formam uma composição impactante e harmoniosa, ideal para homenagens. O vermelho do buquê menor representa paixão, respeito e força emocional, enquanto o branco das flores do arranjo maior simboliza paz e pureza. O buquê vermelho apresenta um design compacto e volumoso, enquanto o grande arranjo vertical destaca sua altura com flores dispostas de forma equilibrada. As folhagens verdes preenchem delicadamente os espaços em ambos os arranjos, adicionando textura e realçando as cores das flores.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 990,99</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Coroa Colorida 2" data-valor="990.99" data-total="990.99" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Coroa Colorida 2" data-valor="990.99">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>



    <div class="card-ramalhete-tradicional" style="display: none;"  id="ramalhete-tradicional" >
        <button class="close-button" onclick="close_butao()">X</button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteTradicional1.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Tradicional 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            
                            Este ramalhete é composto por uma grande flor de girassol no centro, que se destaca com suas pétalas amarelas vibrantes. Ao redor, flores brancas trazem um toque de pureza e serenidade. O amarelo do girassol destaca o ramalhete, enquanto o branco das flores ao redor simboliza paz e respeito. O verde das folhagens transmite renovação e tranquilidade, e o vermelho do laço adiciona elegância ao arranjo. O ramalhete é organizado de maneira fluida e harmônica, com o girassol como ponto central, cercado pelas flores brancas e as folhagens verdes. O laço vermelho proporciona um acabamento sofisticado, dando destaque ao arranjo.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 180,00</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Tradicional 1" data-valor="180.00" data-total="180.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Tradicional 1" data-valor="180.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteTradicional2.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Tradicional 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            O arranjo é composto por flores vermelhas intensas que transmitem energia, flores brancas que simbolizam pureza e serenidade, e ramos roxos que tornam o ramalhete mais sofisticado. As flores vermelhas são o elemento vibrante, enquanto o branco cria um equilíbrio harmonioso. Os ramos roxos acrescentam um contraste refinado, e o verde das folhagens suaviza o conjunto. O ramalhete apresenta uma forma compacta e simétrica, com flores e folhagens dispostas de maneira equilibrada. O papel bege é dobrado delicadamente, conferindo um acabamento natural ao arranjo.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 125,00</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Tradicional 2" data-valor="125.00" data-total="125.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Tradicional 2" data-valor="125.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>




    <div class="card-ramalhete-minimalista" style="display: none;" id="ramalhete-minimalista" >
        <button class="close-button" onclick="close_butao()">X</button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteMinimalista1.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Minimalista 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            
                            O ramalhete é formado por delicadas flores rosa, que transmitem suavidade e ternura, harmonizadas com galhos verdes que trazem um toque rústico e natural. O rosa das flores adiciona um ar romântico e acolhedor, enquanto o verde dos galhos oferece contraste e frescor. O ramalhete possui uma forma leve e descontraída, com as flores rosas agrupadas de maneira harmoniosa e os galhos verdes distribuídos para criar um visual equilibrado. Os galhos verdes adicionam textura e movimento ao ramalhete, suavizando a delicadeza das flores rosas.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 59,90</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Minimalista 1" data-valor="59.90" data-total="59.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Minimalista 1" data-valor="59.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteMinimalista2.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Minimalista 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            O ramalhete é composto por flores em tons suaves de rosa, transmitindo delicadeza e romantismo, combinadas com galhos verdes que adicionam um toque mais natural ao arranjo. O rosa das flores transmite um toque doce e suave, enquanto o verde dos galhos acrescenta frescor e contraste. O formato do ramalhete é descontraído e harmonioso, com as flores rosas posicionadas de forma central e os galhos verdes distribuídos de maneira equilibrada. Os galhos verdes trazem vida e naturalidade ao ramalhete, destacando o tom delicado das flores rosas.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 79,90</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Minimalista 2" data-valor="79.90" data-total="79.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Minimalista 2" data-valor="79.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>



    <div class="card-ramalhete-religiosa" style="display: none;" id="ramalhete-religiosa" >
        <button class="close-button" onclick="close_butao()">X</button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteReligioso1.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Religioso 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            O ramalhete é formado por flores brancas de destaque, cercadas por folhagens verdes que acrescentam frescor e elegância. O branco das flores reflete paz e tranquilidade, enquanto o verde das folhagens transmite equilíbrio e esperança. O design do ramalhete é simétrico e alongado, adequado para momentos de homenagem. As flores brancas estão dispostas no centro, destacando-se com suavidade e criando harmonia e profundidade visual. As folhagens verdes complementam delicadamente as flores brancas, oferecendo uma base natural e equilibrada.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 49,99</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Religioso 1" data-valor="49.99" data-total="49.99" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Religioso 1" data-valor="49.99">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteReligioso2.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Religioso 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            
                            O ramalhete é elaborado com flores brancas, transmitindo serenidade e pureza, complementadas por folhagens verdes que trazem um toque natural ao arranjo. As flores brancas simbolizam paz e conforto, enquanto o verde das folhagens sugere esperança. A faixa branca com letras douradas adiciona um elemento de respeito e sofisticação, completando o arranjo e tornando-o mais elegante. O arranjo tem uma forma alongada, ideal para cerimônias simples, com as flores brancas dispostas de forma centralizada e as folhagens verdes suavemente espalhadas ao redor. As folhagens verdes são escolhidas delicadamente para harmonizar com as flores brancas, criando uma base que valoriza o simbolismo da pureza e o contraste natural.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 65,50</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Religioso 2" data-valor="65.50" data-total="65.50" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Religioso 2" data-valor="65.50">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>



    <div class="card-ramalhete-em-branco" style="display: none;" id="ramalhete-branco" >
        <button class="close-button" onclick="close_butao()">X</button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteBranco1.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Branco 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                           
                            O arranjo é formado por três elegantes rosas brancas, que simbolizam pureza e serenidade. O branco das rosas reflete tranquilidade e harmonia ao ramalhete. O ramalhete apresenta um formato tradicional e bem organizado, com as rosas dispostas lado a lado e as folhagens preenchendo suavemente os espaços ao redor. As folhagens verdes criam um fundo natural para as rosas brancas, destacando sua beleza e leveza.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 70,00</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Branco 1" data-valor="70.00" data-total="70.00" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Branco 1" data-valor="70.00">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteBranco2.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Branco 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            O ramalhete é composto por flores brancas delicadas, que simbolizam paz e pureza, combinadas com flores verdes que trazem frescor e um toque moderno. O branco das flores transmite serenidade e leveza, enquanto o verde adiciona vitalidade e equilíbrio ao ramalhete. O ramalhete possui um formato equilibrado e elegante, com as flores brancas centralizadas e as verdes distribuídas, criando um visual harmonioso. As flores verdes funcionam como um complemento perfeito às brancas, oferecendo um fundo mais vibrante.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 74,99</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Branco 2" data-valor="74.99" data-total="74.99" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Branco 2" data-valor="74.99">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>



    <div class="card-ramalhete-colorido" style="display: none;" id="ramalhete-colorido" >
        <button class="close-button" onclick="close_butao()">X</button>
        <div class="floresCarrossel">

            <div class="carouselflores">

                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteColorido1.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Colorido 1</span>
                    </div>
        
                    <div class="description">
                        <p>
                            O arranjo mistura flores em tons quentes e alegres, como vermelho, amarelo, rosa e laranja, criando uma combinação harmoniosa. As flores vermelhas e laranjas trazem paixão e vivacidade, enquanto as amarelas e rosas equilibram com alegria e delicadeza. O ramalhete é compacto e bem distribuído, com as flores organizadas em um formato equilibrado. Folhagens coloridas complementam o arranjo, trazendo frescor e contraste, realçando ainda mais a intensidade e a beleza das flores.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 115,90</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Colorido 1" data-valor="115.90" data-total="115.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Colorido 1" data-valor="115.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>
                <div class="card-tradicional" >

                    <div class="image_containerFlores">
                        <img loading="lazy" class="image" src="./imagens/ramalheteColorido2.svg">
                    </div>
        
                    <div class="title-coroas">
                        <span>Ramalhete Colorido 2</span>
                    </div>
        
                    <div class="description">
                        <p>
                            O arranjo é formado por flores em cores como vermelho, amarelo e branco, criando um conjunto elegante. As flores vermelhas e amarelas adicionam intensidade, enquanto o rosa escuro deixa o visual mais bonito. O ramalhete é bem equilibrado, com as flores bem distribuídas. Folhagens coloridas, principalmente o amarelo, destacam o ramalhete, trazendo frescor e realçando as cores das flores.
                        </p>
                    </div>
        
                    <div class="price-tradicional">
                        <p>Valor parcelado ate 10x sem juros: <br></p>
                        <p class="valor">R$ 110,90</p>
                        <p class="desconto"></p>
                    </div>
        
                    <div class="comprar">
                        <button class="cart-button" data-nome="Ramalhete Colorido 2" data-valor="110.90" data-total="110.90" onclick="direto(this)">
                            <span>Comprar</span>
                        </button>
                    
                        <button class="cartBtn" onclick="addToCart(this)" data-nome="Ramalhete Colorido 2" data-valor="110.90">
                            <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            Adicionar ao carrinho
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product"><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"></path></svg>
                        </button>
                    </div>
        
                </div>

            </div>

        </div>

    </div>
    <div class="carrinho" >
        <a href="./carrinho.php"><img src="./imagens/shopping-cart_3737151.png" loading="lazy" alt=""></a>
    </div>
    <!-- Modal de confirmação -->
    <div id="success-modal" style="display: none;z-index: 10;">
        <div class="modal-content">
            <p>Item adicionado com sucesso!</p>
            <button onclick="closeModal()">OK</button>
        </div>
    </div>

    <!-- Seção do Buffet -->
    <div id="pag5" class="buffet" >
        <h2>Monte Seu Prato</h2>

        <!-- Seções de Comida -->
        <div>
            <h3 class="section-title">Manhã</h3>
            <div class="item-list">
                <div class="item" data-name="Pão de Queijo" data-price="0.10">
                    <label><input type="checkbox" data-nome="Pão de Queijo" data-valor="0.10"> Pão de Queijo - R$ 0,10/g</label>
                </div>
                <div class="item" data-name="Café" data-price="0.05">
                    <label><input type="checkbox" data-nome="Café" data-valor="0.05"> Café - R$ 0,05/g</label>
                </div>
                <div class="item" data-name="Ovo Mexido" data-price="0.08">
                    <label><input type="checkbox" data-nome="Ovo Mexido" data-valor="0.08"> Ovo Mexido - R$ 0,08/g</label>
                </div>
                <div class="item" data-name="Frutas" data-price="0.07">
                    <label><input type="checkbox" data-nome="Frutas" data-valor="0.07" > Frutas - R$ 0,07/g</label>
                </div>
            </div>
        </div>
    
        <div>
            <h3 class="section-title">Tarde</h3>
            <div class="item-list">
                <div class="item" data-name="Feijão" data-price="0.12">
                    <label><input type="checkbox" data-nome="Feijão" data-valor="0.12"> Feijão - R$ 0,12/g</label>
                </div>
                <div class="item" data-name="Arroz" data-price="0.07">
                    <label><input type="checkbox" data-nome="Arroz" data-valor="0.07"> Arroz - R$ 0,07/g</label>
                </div>
                <div class="item" data-name="Salada" data-price="0.06">
                    <label><input type="checkbox" data-nome="Salada" data-valor="0.06"> Salada - R$ 0,06/g</label>
                </div>
                <div class="item" data-name="Bife Acebolado" data-price="0.15">
                    <label><input type="checkbox" data-nome="Bife Acebolado" data-valor="0.15"> Bife Acebolado - R$ 0,15/g</label>
                </div>
            </div>
        </div>
    
        <div>
            <h3 class="section-title">Noite</h3>
            <div class="item-list">
                <div class="item" data-name="Pizza" data-price="0.18">
                    <label><input type="checkbox" data-nome="Pizza" data-valor="0.18"> Pizza - R$ 0,18/g</label>
                </div>
                <div class="item" data-name="Sopa" data-price="0.10">
                    <label><input type="checkbox" data-nome="Sopa" data-valor="0.10"> Sopa - R$ 0,10/g</label>
                </div>
                <div class="item" data-name="Suco de Laranja" data-price="0.04">
                    <label><input type="checkbox" data-nome="Suco de Laranja" data-valor="0.04"> Suco de Laranja - R$ 0,04/g</label>
                </div>
                <div class="item" data-name="Sanduíche" data-price="0.09">
                    <label><input type="checkbox" data-nome="Sanduíche" data-valor="0.09"> Sanduíche - R$ 0,09/g</label>
                </div>
            </div>
        </div>
    
        <!-- Lista de Itens Selecionados -->
        <h3>Itens Selecionados</h3>
        <ul id="buffet-dish-list"></ul>
    
        <!-- Botões de Controle -->
        <div class="buffet-buttons">
            
            <button id="finalize-button" onclick="finalizeOrder()">Finalizar Pedido</button>
        </div>
    
        <div class="suporte" id="suporte">
            <footer style="background-color: #333; color: #fff; font-size: 20px; padding: 20px; text-align: center;">
                <div style="display: flex; justify-content: space-between; flex-wrap: wrap; max-width: 1200px; margin: 0 auto;">
                    <!-- Coluna 1 -->
                    <div style="flex: 1; min-width: 280px; padding: 10px;">
                        <p>
                            <strong>Instagram:</strong>
                            <a href="https://instagram.com/funerariagricultor_" target="_blank" style="text-decoration: none; color: #fff;">
                                <button style="background-color: #555; border: none; padding: 10px; border-radius: 5px; cursor: pointer;">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" alt="Instagram" style="width: 20px; height: 20px; vertical-align: middle;">
                                    @funerariagricultor_
                                </button>
                            </a>
                        </p>
                        <p><strong>Contato:</strong> (31) 97106-8821</p>
                        <p><strong>Email:</strong> funerariaagricultor@gmail.com</p>
                    </div>
            
                    <!-- Coluna 2 -->
                    <div style="flex: 1; min-width: 280px; padding: 10px;">
                        <p><strong>Atendimento:</strong> 24 horas</p>
                        <p><strong>Localização:</strong> Rua: Paraíso, 6070 - Cidade de Deus, RJ</p>
                        <p><strong>CEP:</strong> 17384-100</p>
                    </div>
                </div>
            
                <!-- Rodapé -->
                 <p>A 30 anos, plantando o homem na terra.</p>
                <p style="margin-top: 15px; font-size: 14px; color: #ccc;">&copy; 2024 Funerária Agricultor. Todos os direitos reservados.</p>
            </footer>
            
        </div>
    
    
    </div>



    <script src="./js/pag3.js"></script>
</body>

</html>