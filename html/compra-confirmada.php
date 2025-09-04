<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compra Efetuada</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background: #181818;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .confirm-container {
      background: #232124;
      border-radius: 16px;
      box-shadow: 0 2px 16px #0005;
      padding: 48px 32px;
      max-width: 420px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 24px;
    }
    .confirm-title {
      color: #ff3571;
      font-size: 2rem;
      font-weight: 900;
      margin-bottom: 12px;
    }
    .confirm-msg {
      font-size: 1.2rem;
      color: #fff;
      margin-bottom: 18px;
    }
    .confirm-note {
      color: #ff3571;
      font-size: 1rem;
      margin-bottom: 8px;
    }
    .confirm-btn {
      background: #ff3571;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 12px 32px;
      font-size: 1.1rem;
      font-weight: 700;
      cursor: pointer;
      margin-top: 18px;
      transition: background 0.2s;
    }
    .confirm-btn:hover {
      background: #e6005a;
    }
  </style>
</head>
<body>
  <div class="confirm-container">
    <div class="confirm-title">Parabéns!</div>
    <div class="confirm-msg">Sua compra foi efetuada com sucesso.</div>
    <div class="confirm-note">Fique ligado no seu e-mail!<br>Enviamos um código para você efetuar o pagamento do seu produto.<br>Acompanhe o status do seu pedido por lá.</div>
    <a href="../../index.php"><button class="confirm-btn">Voltar para a página inicial</button></a>
  </div>
</body>
</html>
