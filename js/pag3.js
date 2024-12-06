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
