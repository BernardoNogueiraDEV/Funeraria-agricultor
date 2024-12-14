let currentIndex = 0; // Índice do cartão atualmente visível
const cards = document.querySelectorAll('.card'); // Seleciona todos os cartões
const carousel = document.querySelector('.carousel'); // Seleciona o contêiner dos cartões

function updateVisibility() {
    // Atualiza a posição do carrossel
    const offset = -currentIndex * 8; // Calcula o deslocamento com base no índice
    carousel.style.transform = `translateX(${offset}%)`;

    // Atualiza a classe "visible" para o cartão atualmente selecionado
    cards.forEach((card, index) => {
        if (index === currentIndex) {
            card.classList.add('visible');
        } else {
            card.classList.remove('visible');
        }
    });
}

function nextSlide() {
    // Avança para o próximo cartão
    if (currentIndex < cards.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0; // Volta ao início quando chegar ao fim
    }
    updateVisibility();
}

function prevSlide() {
    // Volta para o cartão anterior
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = cards.length - 1; // Vai para o último cartão se estiver no início
    }
    updateVisibility();
}

// Inicializa a visibilidade correta no início
updateVisibility();


const valores = document.getElementsByClassName('valor');
const desconto = document.getElementsByClassName('desconto');

for (let i = 0; i < valores.length; i++){
    const valorNumerico = parseFloat(valores[i].innerText.replace('R$ ', '').replace(',', '.'));
    desconto[i].innerHTML = `Valor a vista com 30% de desconto R$ ${(valorNumerico - (valorNumerico * 0.30)).toFixed(2)}`;
}

let ativo = false; // Mover a declaração para fora do evento

menu.addEventListener('click', () => {
    const navegacao = document.getElementById('navegacao');
    const header = document.getElementById('header');
    if (ativo === false) {
        navegacao.style.left = '0';
        ativo = true;
        header.style.backdropFilter = 'Blur(12px)';
    } else {
        navegacao.style.left = '-100%';
        ativo = false;
        header.style.backdropFilter = 'Blur(0px)';
       
    }
});
function atualizarExibicao() {
    // Obtém os valores selecionados
    const tipoFlor = document.querySelector('input[name="tipo_flor"]:checked')?.value;
    const tipoCoroa = document.querySelector('input[name="tipo_coroa"]:checked')?.value;

    const tradicional = document.getElementsByClassName('card-flores-tradicional')[0];
    const minimalista = document.getElementsByClassName('card-flores-minimalista')[0];
    const religiosa = document.getElementsByClassName('card-flores-religiosa')[0];
    const branca = document.getElementsByClassName('card-flores-Exclusiva-em-branco')[0];
    const colorida = document.getElementsByClassName('card-flores-colorida')[0];

    const rtradicional = document.getElementsByClassName('card-ramalhete-tradicional')[0];
    const rmminimalista = document.getElementsByClassName('card-ramalhete-minimalista')[0];
    const rreligiosa = document.getElementsByClassName('card-ramalhete-religiosa')[0];
    const rbranca = document.getElementsByClassName('card-ramalhete-em-branco')[0];
    const rcolorida = document.getElementsByClassName('card-ramalhete-colorido')[0];

    // Inicializa todos os elementos como não visíveis
    const elementos = [tradicional, minimalista, religiosa, branca, colorida, rtradicional, rmminimalista, rreligiosa, rbranca, rcolorida];
    elementos.forEach(elemento => {
        if (elemento) {
            elemento.style.display = 'none';
        }
    });

    // Lógica para exibir os elementos corretos
    if (tipoFlor === 'coroa' && tipoCoroa === 'tradicional') {
        tradicional.style.display = 'flex';
        document.location.href = '#card-tradicional';
    } else if (tipoFlor === 'coroa' && tipoCoroa === 'minimalista') {
        minimalista.style.display = 'flex';
        document.location.href = '#card-minimalista';
    } else if (tipoFlor === 'coroa' && tipoCoroa === 'religiosa') {
        religiosa.style.display = 'flex';
        document.location.href = '#card-religiosa';
    } else if (tipoFlor === 'coroa' && tipoCoroa === 'branca') {
        branca.style.display = 'flex';
        document.location.href = '#card-branca';
    } else if (tipoFlor === 'coroa' && tipoCoroa === 'colorida') {
        colorida.style.display = 'flex';
        document.location.href = '#card-colorida';
    }

    if (tipoFlor === 'ramalhete' && tipoCoroa === 'tradicional'){
        rtradicional.style.display = 'flex';
        document.location.href = '#ramalhete-tradicional';
    } else if (tipoFlor === 'ramalhete' && tipoCoroa === 'minimalista'){
        rmminimalista.style.display = 'flex';
        document.location.href = '#ramalhete-minimalista';
    } else if (tipoFlor === 'ramalhete' && tipoCoroa === 'religiosa'){
        rreligiosa.style.display = 'flex';
        document.location.href = '#ramalhete-religiosa';
    } else if (tipoFlor === 'ramalhete' && tipoCoroa === 'branca'){
        rbranca.style.display = 'flex';
        document.location.href = '#ramalhete-branco';
    } else if (tipoFlor === 'ramalhete' && tipoCoroa === 'colorida'){
        rcolorida.style.display = 'flex';
        document.location.href = '#ramalhete-colorido';
    }
}

function comprar(button) {
    // Obtém o nome e o valor do produto a partir dos atributos data
    var nomeProduto = button.getAttribute('data-nome');
    var valorProduto = button.getAttribute('data-valor');

    // Redireciona para a página de compra com os parâmetros
    window.location.href = './compra.html?nome=' + encodeURIComponent(nomeProduto) + '&valor=' + encodeURIComponent(valorProduto);
}
