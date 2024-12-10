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

for (let i = 0; i < 12; i++){
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