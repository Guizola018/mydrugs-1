<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finalizar Compra</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/cart.css">
  <style>
    body {
      background: #181818;
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    /* Remover barra de passos */
    .checkout-steps { display: none; }
    .checkout-main {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 32px;
      width: 100vw;
      min-height: 100vh;
      margin: 0;
    }
    .checkout-left, .checkout-right {
      width: 100%;
      max-width: 600px;
      min-width: unset;
      margin: 0 auto 24px auto;
      box-sizing: border-box;
    }
    .checkout-title {
      color: #ff3571;
      font-size: 2rem;
      font-weight: 900;
      margin-bottom: 32px;
      text-align: center;
    }
    .checkout-label {
      font-weight: 700;
      margin-bottom: 8px;
      display: block;
      color: #fff;
      font-size: 1.1rem;
    }
    .checkout-select, .checkout-input {
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #333;
      background: #222;
      color: #fff;
      font-size: 1rem;
      margin-bottom: 18px;
      box-sizing: border-box;
    }
    .checkout-pay-methods {
      display: flex;
      gap: 16px;
      margin-bottom: 18px;
    }
    .checkout-pay-btn {
      flex: 1;
      padding: 12px 0;
      border-radius: 6px;
      border: 2px solid #ff3571;
      background: #181818;
      color: #ff3571;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.2s, color 0.2s;
    }
    .checkout-pay-btn.selected, .checkout-pay-btn:focus {
      background: #ff3571;
      color: #fff;
    }
    .checkout-note {
      color: #ff3571;
      font-size: 0.95rem;
      margin-bottom: 18px;
      margin-top: -8px;
    }
    .checkout-next {
      width: 100%;
      background: #ff3571;
      color: #fff;
      font-size: 1.1rem;
      font-weight: 700;
      border: none;
      border-radius: 8px;
      padding: 14px 0;
      margin-top: 24px;
      cursor: pointer;
      transition: background 0.2s;
    }
    .checkout-next:hover {
      background: #e6005a;
    }
    .checkout-secure {
      margin: 18px 0 0 0;
      text-align: center;
      color: #3bb54a;
      font-weight: 700;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
      gap: 8px;
      justify-content: center;
    }
    .checkout-secure img {
      height: 28px;
    }
    /* LADO DIREITO */
    .checkout-right {
      background: #232124;
      border-radius: 12px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      padding: 36px 32px 32px 32px;
      min-width: 340px;
      max-width: 400px;
      flex: 1 1 340px;
    }
    .checkout-summary-title {
      color: #ff3571;
      font-size: 1.3rem;
      font-weight: 900;
      margin-bottom: 8px;
      text-transform: uppercase;
    }
    .checkout-summary-list {
      margin: 0 0 18px 0;
      padding: 0;
      list-style: none;
    }
    .checkout-summary-list li {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 8px;
      font-size: 1rem;
      color: #fff;
    }
    .checkout-summary-list img {
      width: 32px;
      height: 32px;
      object-fit: contain;
      border-radius: 6px;
      margin-right: 8px;
    }
    .checkout-summary-total {
      font-size: 1.3rem;
      font-weight: 900;
      color: #ff3571;
      margin: 18px 0 12px 0;
      text-align: right;
    }
    .checkout-cupom {
      display: flex;
      gap: 8px;
      margin-bottom: 18px;
    }
    .checkout-cupom input {
      flex: 1;
      padding: 8px;
      border-radius: 6px;
      border: 1px solid #333;
      font-size: 1rem;
      background: #222;
      color: #fff;
    }
    .checkout-cupom button {
      background: #ff3571;
      color: #fff;
      border: none;
      border-radius: 6px;
      padding: 8px 18px;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.2s;
    }
    .checkout-cupom button:disabled {
      background: #333;
      color: #fff;
      cursor: not-allowed;
    }
    .checkout-warning {
      background: #2a1a1f;
      color: #ff3571;
      border-radius: 8px;
      padding: 16px;
      font-size: 1rem;
      margin-top: 18px;
      text-align: left;
    }
    @media (min-width: 900px) {
      .checkout-main {
        flex-direction: row;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }
      .checkout-left, .checkout-right {
        max-width: 520px;
        margin: 0 16px;
      }
    }
  </style>
</head>
<body>
  <a href="/mydrugs/index.php?page=shop" style="position:absolute;top:32px;left:32px;z-index:10;text-decoration:none;"><button style="background:#333;color:#fff;border:none;border-radius:8px;padding:10px 24px;font-size:1rem;font-weight:700;cursor:pointer;box-shadow:0 2px 8px #0002;">&larr; Voltar para loja</button></a>
  <div class="checkout-main">
    <div class="checkout-left">
      <div class="checkout-title">Método de pagamento</div>
      <label class="checkout-label">Moeda:</label>
      <select class="checkout-select" id="moedaSelect">
  <option value="BTC">BTC</option>
      </select>
      <label class="checkout-label">Método de pagamento:</label>
      <div class="checkout-pay-methods">
        <button type="button" class="checkout-pay-btn" id="btn-btc">BITCOIN</button>
      </div>
      <div class="checkout-note">
        <span>Nota: Este método de pagamento ativa a renovação automática do plano, que pode ser cancelada quando desejar.</span>
      </div>
      <button class="checkout-next" id="btn-seguinte">Seguinte</button>
      <div class="checkout-secure">
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Compra Segura">
        COMPRA SEGURA
      </div>
    </div>
    <div class="checkout-right">
      <div class="checkout-summary-title">Resumo do pedido</div>
      <ul class="checkout-summary-list" id="checkoutResumo" style="display:flex;flex-direction:column;align-items:center;gap:12px;"></ul>
      <div id="checkoutSubtotal"></div>
      <button id="btnLimparCarrinho" style="width:100%;background:#333;color:#fff;font-size:1rem;font-weight:700;border:none;border-radius:8px;padding:12px 0;margin-bottom:12px;cursor:pointer;">Limpar produtos</button>
      <div class="checkout-cupom">
        <input type="text" id="cupomInput" placeholder="Inserir código">
        <button id="btnCupom" disabled>Aplicar</button>
      </div>
      <div class="checkout-warning">
        <b>AVISO</b><br>
        O novo pedido será processado após confirmação do pagamento.<br>
        <span style="font-weight:600">Você receberá um e-mail com o status e rastreio.</span>
      </div>
    </div>
  </div>
  <script>
    // Troca seleção de método de pagamento
    document.querySelectorAll('.checkout-pay-btn').forEach(btn => {
      btn.onclick = function() {
        document.querySelectorAll('.checkout-pay-btn').forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
        atualizarResumoCheckout();
      };
    });

    // Conversão de moedas (valores fictícios, ajuste conforme necessário)
    const cotacoes = {
  BTC: 340000.0 // 1 BTC = 340.000 BRL (exemplo)
    };
    const simbolos = {
  BTC: 'BTC'
    };

    function formatarValor(valor, moeda) {
  return valor.toFixed(4) + ' BTC';
    }

    function formatarValorBRL(valor) {
      return 'R$ ' + valor.toFixed(2);
    }

    function atualizarResumoCheckout() {
      const carrinho = (JSON.parse(localStorage.getItem('carrinho')) || []).filter(item => item.qtd && item.qtd > 0);
      const ul = document.getElementById('checkoutResumo');
      let subtotal = 0;
      ul.innerHTML = '';
      carrinho.forEach(item => {
        let valorNum = 0;
        if (typeof item.valor === 'string') {
          // Garante que só pegue o número do valor em BTC
          valorNum = parseFloat(item.valor.replace(/[^0-9\.]/g, '').replace(',', '.'));
        } else if (typeof item.valor === 'number') {
          valorNum = item.valor;
        }
        let valorTotalProduto = valorNum * (item.qtd || 1);
        if (!isNaN(valorTotalProduto) && valorTotalProduto > 0) {
          subtotal += valorTotalProduto;
          let valorExibicao = formatarValor(valorTotalProduto, 'BTC');
          ul.innerHTML += `<li style='width:100%;display:flex;align-items:center;justify-content:center;gap:16px;'><img src="${item.imgSrc}" alt="${item.nome}" style="width:36px;height:36px;border-radius:8px;"> <div style='text-align:left;flex:1;'><b>${item.nome}</b><br>x${item.qtd}</div><div style='font-weight:700;color:#ff3571;font-size:1.1rem;'>${valorExibicao}</div></li>`;
        }
      });
      document.getElementById('checkoutSubtotal').innerHTML = `<div style='text-align:right;font-size:1.1rem;margin:12px 0;'><b>Total:</b> <span style='color:#e6005a;font-size:1.3rem;'>${formatarValor(subtotal, 'BTC')}</span></div>`;
    }

    document.getElementById('moedaSelect').addEventListener('change', atualizarResumoCheckout);

    // Limpar carrinho
    document.getElementById('btnLimparCarrinho').onclick = function() {
      localStorage.removeItem('carrinho');
      atualizarResumoCheckout();
    };

    // Redirecionar para a página de confirmação
    document.getElementById('btn-seguinte').onclick = function() {
  window.location.href = 'compra-confirmada.html';
};

    // Inicializar
    atualizarResumoCheckout();
  </script>
</body>
</html>
