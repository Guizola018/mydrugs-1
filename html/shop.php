<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/shop.css">
  <link rel="stylesheet" href="../css/cart.css">
  <title>Loja</title>
</head>

<body>
  <div class="fixed">
    <navbar id="nav">
      <div class="navbar_container">
        <div class="container-mobile">
          <button id="btn-mobile"><span id="hamburger"></span></button>
          <div class="logo-mobile">
            <a href="index.php"><img src="../img/logos/WhiteLogo.png" class="logo-mobile" alt="Logo MyDrugs"></a>
          </div>
        </div>
        <ul id="menu">
          <li class="home-mobile">
            <a href="index.php"id="close">início</a>
          </li>
          <li class="navbar_items">
            <a href="shop.php" class="blue" id="close">loja</a>
          </li>
          <li class="navbar_items">
            <a href="faq.php" class="green" id="close">dúvidas</a>
          </li>
          <li id="logo-mobile">
            <a href="../index.php"><img src="../img/logos/WhiteLogo.png" id="#logo-mobile " class="logo" alt="Logo MyDrugs"></a>
          </li>
          <li class="navbar_items">
            <a href="contact.php" class="red" id="close">contato</a>
          </li>
          <li class="navbar_items">
            <a href="login.php" class="orange" id="close">login</a>
          </li>
          <li class="navbar_items" id="li-logout" style="display:none">
            <button id="logoutBtn" style="background:#ff3535;color:white;padding:8px 24px;border:none;border-radius:8px;font-size:16px;font-weight:bold;cursor:pointer;">Sair</button>
          </li>
        </ul>
      </div>
    </navbar>
  </div>

  <body onLoad="slide1()"></body>
  <img id="slide1">
  <script src="/js/main.js"></script>
  <script type="text/javascript">
    function slide1() {
      const slide = document.getElementById("slide1")
      let slideAtual = 1
      slide.src = "../img/SliderImages/SmallerSliders/banner-shop.png"
      setInterval(() => {
        slideAtual == 0 ? (() => {
          slideAtual = 1
          slide.src = "../img/SliderImages/SmallerSliders/banner-shop.png"
        })() : (() => {
          slideAtual = 0
          slide.src = "../img/SliderImages/SmallerSliders/promocao.png"
        })()
      }, 2000);
    }
  </script>

  <div class="title">
    <h1>Mais Populares</h1>
  </div>
  <div class="container">

  </div>
  </div>
  </div>
  <div class="title">
    <h1>Novidades</h1>
  </div>
  <section></section>
  <div class="cart-overlay" id="cartOverlay"></div>
  <div class="cart-sidebar" id="cartSidebar" style="display:none;">
    <h2>Carrinho de Compras</h2>
    <ul id="cartItems" class="cart-list"></ul>
    <button id="checkoutBtn">Finalizar compra</button>
  </div>
  <button id="btnAbrirCarrinho" style="position:fixed;top:32px;right:32px;z-index:1000;background:#232124;border:none;border-radius:50%;width:56px;height:56px;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px #0002;cursor:pointer;">
    <i class="fas fa-shopping-cart" style="font-size:2rem;color:#ff3571;"></i>
  </button>
  <script src="../js/mobile.js"></script>
  <script src="../js/drugs.js"></script>
  <script>
  // Utilitário para buscar imagem do produto
  function getProductImage(nome) {
    // Adapte conforme o padrão dos nomes das imagens
    const map = {
      'TREVO AZUL': 'blue_pill.png',
      'FLOCO DE NEVE VERDE': 'green_pill.png',
      'TADALAFELAS': 'super_man_1.png',
      // ...adicione outros produtos conforme necessário
    };
    for (let key in map) {
      if (nome.toUpperCase().includes(key)) return '../img/products/' + map[key];
    }
    return '../img/products/blue_pill.png'; // fallback
  }

  // Função para adicionar item ao carrinho
  function addToCart(nome, valor, imgSrc) {
    const cartItems = document.getElementById('cartItems');
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    // Verifica se já existe
    let li = Array.from(cartItems.children).find(li => li.dataset.nome === nome && li.dataset.valor === valor);
    let itemCarrinho = carrinho.find(item => item.nome === nome && item.valor === valor);
    if (li && itemCarrinho) {
      const qtyInput = li.querySelector('.cart-qty');
      qtyInput.value = parseInt(qtyInput.value) + 1;
      itemCarrinho.qtd = parseInt(qtyInput.value);
    } else {
      li = document.createElement('li');
      li.className = 'cart-item';
      li.dataset.nome = nome;
      li.dataset.valor = valor;
      li.innerHTML = `
        <img src="${imgSrc}" class="cart-img" alt="${nome}">
        <span class="cart-prod">${nome}<br><span class="cart-price">${valor}</span></span>
        <div class="cart-controls">
          <button class="cart-remove">-</button>
          <input type="number" class="cart-qty" value="1" min="1">
          <button class="cart-add">+</button>
        </div>
      `;
      cartItems.appendChild(li);
      carrinho.push({ nome, valor, imgSrc, qtd: 1 });
    }
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    openCartSidebar();
  }

  // Eventos de adicionar/remover quantidade
  document.getElementById('cartItems').addEventListener('click', function(e) {
    const li = e.target.closest('li.cart-item');
    if (!li) return;
    const qtyInput = li.querySelector('.cart-qty');
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    let itemCarrinho = carrinho.find(item => item.nome === li.dataset.nome && item.valor === li.dataset.valor);
    if (e.target.classList.contains('cart-add')) {
      qtyInput.value = parseInt(qtyInput.value) + 1;
      if (itemCarrinho) itemCarrinho.qtd = parseInt(qtyInput.value);
    }
    if (e.target.classList.contains('cart-remove')) {
      if (parseInt(qtyInput.value) > 1) {
        qtyInput.value = parseInt(qtyInput.value) - 1;
        if (itemCarrinho) itemCarrinho.qtd = parseInt(qtyInput.value);
      } else {
        li.remove();
        carrinho = carrinho.filter(item => !(item.nome === li.dataset.nome && item.valor === li.dataset.valor));
      }
    }
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
  });

  // Adiciona ao carrinho ao clicar em BTC ou R$
  document.addEventListener('click', function(e) {
    if (e.target.classList.contains('btc')) {
      // Verifica se está logado
      if (!localStorage.getItem('usuarioLogado')) {
        window.location.href = 'login.php';
        return;
      }
      e.preventDefault();
      const card = e.target.closest('.card_shop');
      const nome = card.querySelector('h3').innerText;
      const valor = e.target.innerText;
      const img = card.querySelector('img') ? card.querySelector('img').src : getProductImage(nome);
      addToCart(nome, valor, img);
    }
  });

  // Botão finalizar compra redireciona para página de confirmação
  document.getElementById('checkoutBtn').onclick = function() {
    window.location.href = 'finalizar-compra.php';
  };
  document.getElementById('cartOverlay').onclick = closeCartSidebar;
  document.getElementById('btnAbrirCarrinho').onclick = openCartSidebar;

  function openCartSidebar() {
    document.getElementById('cartSidebar').style.display = 'flex';
    document.getElementById('cartOverlay').style.display = 'block';
  }
  function closeCartSidebar() {
    document.getElementById('cartSidebar').style.display = 'none';
    document.getElementById('cartOverlay').style.display = 'none';
  }
  </script>
</body>

</html>