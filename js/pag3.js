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

    const pag5 = document.querySelector('#pag5');

    pag5.style.top = '635%';

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
let container = []; // Array para armazenar os itens no carrinho
let subtotal = 0; // Total acumulado
let itemCount = 0; // Contagem de itens no carrinho

// Função para exibir o modal de sucesso
function showSuccessModal() {
    const modal = document.getElementById('success-modal');
    modal.style.display = 'flex';

    // Fecha o modal automaticamente após 2 segundos
    setTimeout(() => {
        closeModal();
    }, 2000);
}

// Função para fechar o modal
function closeModal() {
    const modal = document.getElementById('success-modal');
    modal.style.display = 'none';
}
function addToCart(button) {
    // Recuperar o nome e o valor a partir dos atributos 'data-nome' e 'data-valor'
    const nome = button.getAttribute('data-nome');
    const valor = parseFloat(button.getAttribute('data-valor')); // Garantir que seja um número
    const quantidade = parseInt(button.getAttribute('data-quantidade')) || 1; // Recuperar a quantidade (padrão: 1)

    // Verificar se nome, valor e quantidade são válidos
    if (!nome || isNaN(valor) || isNaN(quantidade)) {
        console.error('Nome, valor ou quantidade inválidos');
        return;
    }

    // Recupera o carrinho existente do localStorage ou inicializa um novo array
    const carrinho = JSON.parse(localStorage.getItem('container')) || [];

    // Verifica se o item já existe no carrinho
    const itemExistente = carrinho.find(item => item.nome === nome);

    if (itemExistente) {
        // Atualiza a quantidade do item existente
        itemExistente.quantidade += quantidade;
    } else {
        // Adiciona o novo item ao carrinho
        carrinho.push({ nome, valor, quantidade });
    }

    // Salva o carrinho atualizado no localStorage
    localStorage.setItem('container', JSON.stringify(carrinho));

    // Exibe a mensagem de sucesso
    const mensagem = document.createElement('div');
    mensagem.innerText = "Item adicionado com sucesso!";
    mensagem.style.position = "fixed";
    mensagem.style.bottom = "20px";
    mensagem.style.right = "20px";
    mensagem.style.backgroundColor = "#4caf50";
    mensagem.style.color = "white";
    mensagem.style.padding = "10px";
    mensagem.style.borderRadius = "5px";
    mensagem.style.boxShadow = "0 2px 5px rgba(0,0,0,0.3)";
    document.body.appendChild(mensagem);

    // Remove a mensagem após 2 segundos
    setTimeout(() => {
        mensagem.remove();
    }, 2000);
}
// Exemplo de função para limpar o carrinho
function limparCarrinho() {
    localStorage.removeItem('container'); // Limpa o carrinho
    location.reload();
}







function updateCartDisplay() {
    // Recupera o carrinho do localStorage
    const carrinho = JSON.parse(localStorage.getItem('container')) || [];
    const itensContainer = document.getElementById('itens-container');
    const totalElement = document.getElementById('total');

    // Verifica se os elementos existem na página
    if (!itensContainer || !totalElement) {
        console.error("Elementos do carrinho não encontrados na página.");
        return;
    }

    // Limpa o conteúdo atual do carrinho na tela
    itensContainer.innerHTML = '';

    // Verifica se o carrinho está vazio
    if (carrinho.length === 0) {
        itensContainer.innerHTML = '<p>Seu carrinho está vazio!</p>';
        totalElement.innerText = '';
        return;
    }

    // Renderiza os itens do carrinho
    let total = 0;
    carrinho.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('item'); // Adiciona uma classe para o item

        itemDiv.innerHTML = `
            <div class="item-info">
                <p>${item.nome}</p>
                <p class="item-price">R$ ${item.valor.toFixed(2)}</p>
            </div>
        `;

        itensContainer.appendChild(itemDiv);

        // Atualiza o total
        total += item.valor;
    });

    // Atualiza o total na página
    totalElement.innerText = `Total: R$ ${total.toFixed(2)}`;
}
document.addEventListener("DOMContentLoaded", () => {
    const dishList = document.getElementById("buffet-dish-list");
    const toggleButton = document.getElementById("toggle-dish-view");
    const finalizeButton = document.getElementById("finalize-button");

    const checkboxes = document.querySelectorAll(".item input[type='checkbox']");

    function updateLocalStorage() {
        // Recupera o carrinho existente ou inicializa um array vazio
        const carrinhoExistente = JSON.parse(localStorage.getItem("container")) || [];
    
        // Captura os itens do buffet atualmente exibidos
        const buffetItems = Array.from(dishList.querySelectorAll("li")).map(item => ({
            nome: item.dataset.name,
            valor: parseFloat(item.dataset.price),
            quantidade: parseInt(item.dataset.quantity, 10)
        }));
    
        // Adiciona ou atualiza os itens do buffet no carrinho existente
        buffetItems.forEach(buffetItem => {
            const itemExistente = carrinhoExistente.find(item => item.nome === buffetItem.nome);
    
            if (itemExistente) {
                // Atualiza a quantidade do item existente (somente para buffet)
                if (buffetItem.quantidade) {
                    itemExistente.quantidade = buffetItem.quantidade;
                }
            } else {
                // Adiciona o novo item ao carrinho
                carrinhoExistente.push(buffetItem);
            }
        });
    
        // Salva o carrinho atualizado no localStorage
        localStorage.setItem("container", JSON.stringify(carrinhoExistente));
    }
    
    

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", () => {
            const parent = checkbox.closest(".item");
            const name = parent.dataset.name;
            const price = parseFloat(parent.dataset.price);
    
            if (checkbox.checked) {
                const listItem = document.createElement("li");
                listItem.dataset.name = name;
                listItem.dataset.price = price;
                listItem.dataset.quantity = 100;
    
                listItem.innerHTML = `
                    ${name} - <strong>R$ ${(price * 100).toFixed(2)}</strong> (100g)
                    <div>
                        <button class="decrease">-</button>
                        <span class="quantity">100</span>g
                        <button class="increase">+</button>
                    </div>
                `;
                dishList.appendChild(listItem);
    
                addQuantityListeners(listItem);
            } else {
                const existingItem = dishList.querySelector(`li[data-name="${name}"]`);
                if (existingItem) existingItem.remove();
            }
    
            updateLocalStorage(); // Atualiza o localStorage
        });
    });
    

    toggleButton.addEventListener("click", () => {
        dishList.style.display = dishList.style.display === "none" ? "block" : "none";
    });

    finalizeButton.addEventListener("click", () => {
        alert("Pedido Finalizado!");
    });

    function addQuantityListeners(listItem) {
        const decreaseButton = listItem.querySelector(".decrease");
        const increaseButton = listItem.querySelector(".increase");
        const quantitySpan = listItem.querySelector(".quantity");

        decreaseButton.addEventListener("click", () => {
            let quantity = parseInt(listItem.dataset.quantity, 10);
            if (quantity > 100) {
                quantity -= 100;
                updateItem(quantity);
            }
        });

        increaseButton.addEventListener("click", () => {
            let quantity = parseInt(listItem.dataset.quantity, 10);
            quantity += 100;
            updateItem(quantity);
        });

        function updateItem(quantity) {
            const price = parseFloat(listItem.dataset.price);
            listItem.dataset.quantity = quantity;
            quantitySpan.textContent = quantity;
            listItem.querySelector("strong").textContent = `R$ ${(price * quantity).toFixed(2)}`;
            updateLocalStorage(); // Atualiza o localStorage ao modificar a quantidade
        }
    }
});
function finalizeOrder() {
    // Verificar se há itens no localStorage
    const carrinho = JSON.parse(localStorage.getItem("buffetCart")) || [];
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio! Selecione itens antes de finalizar.");
        return;
    }

    // Redirecionar para a página do carrinho
    window.location.href = "carrinho.html";
}



function close_butao(){
    const botao = document.querySelector('.close-button');
    const close_butao = document.querySelector('#pag5');

    close_butao.style.top = '505%';

    botao = document.getElementsByClassName('card-flores-tradicional')[0].style.display='none';
    
    
}
const searchInput = document.getElementById('pesquisa');
if (searchInput) {
    searchInput.addEventListener('input', (event) => {
        const valor = event.target.value.toLowerCase().trim();
        const header = document.querySelector('header'); // Seleciona o header

        // Garante que o header não suma
        if (header) {
            header.style.position = 'fixed'; // Fixando o header no topo
            header.style.top = '0';
        }

        // Dicionário de palavras-chave e as seções correspondentes
        const keywordsToSections = {
            "caixão": ".pag3",  // Palavra-chave para a seção de Caixões
            "caixões": ".pag3",
            "caixoes": ".pag3",
            "flores": ".pag4",  // Palavra-chave para a seção de Flores
            "quem somos": ".pag2",  // Palavra-chave para a seção "Quem Somos"
            "sobre": ".pag2",
            "promoções": ".mensagem",  // Palavra-chave para a seção de Promoções
            "buffet": "#pag5", // Palavra-chave para a seção de Produtos
            "suporte": ".suporte", // Palavra-chave para a seção de Serviços
            "contato": ".suporte", // Palavra-chave para a seção de Contato

        };

        // Encontrar a palavra-chave mais próxima
        let foundSection = null;

        // Percorre as palavras-chave do dicionário e verifica se o valor da pesquisa contém alguma delas
        for (const keyword in keywordsToSections) {
            if (valor.includes(keyword)) {
                foundSection = document.querySelector(keywordsToSections[keyword]);
                break; // Interrompe quando encontrar a primeira correspondência
            }
        }

        // Se encontramos uma seção correspondente, rola até ela
        if (foundSection) {
            foundSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
} else {
    console.error('Elemento com id="pesquisa" não encontrado!');
}
        // Seleciona os elementos
        const botaoConhecer = document.getElementById('botao_conhecer');
        const modal = document.getElementById('modal');
        const fecharModal = document.getElementById('fechar_modal');

        // Mostra o modal ao clicar no botão "Conhecer"
        botaoConhecer.addEventListener('click', () => {
            modal.style.display = 'flex';
        });

        // Fecha o modal ao clicar no botão "X"
        fecharModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Fecha o modal ao clicar fora dele
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
