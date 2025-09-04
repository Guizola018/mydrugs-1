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
  <link rel="stylesheet" href="../css/style.css">
  <title>Contato</title>
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
        <ul id="menu">          <li class="home-mobile">
            <a href="index.php" id="close">início</a>
          </li>
          <li class="navbar_items">
            <a href="shop.php" class="blue" id="close">loja</a>
          </li>
          <li class="navbar_items">
            <a href="faq.php" class="green" id="close">dúvidas</a>
          </li>
          <li id="logo-mobile">
            <a href="../index.php"><img src="../img/logos/WhiteLogo.png" id="#logo-mobile " class="logo"
                alt="Logo MyDrugs"></a>
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
  <section>
    <div class="card_shop2">
      <h1 class="dev-title">Desenvolvedor Principal</h1>
      <div class="container_contact contrib-row">
        <div class="github">
          <a href="" target="_blank"><i class="fab fa-github"></i>Guizola</a>
        </div>
          <div class="linkedin">
            <a href="" target="_blank"><i class="fab fa-linkedin"></i>Guizola</a>
          </div>
        <div class="discord">
          <a href="" target="_blank"><i class="fab fa-discord"></i>Tropa do Truco</a>
        </div>
      </div>
      <h2></h2>
      <div class="contributers">
        <div class="contrib-row">
          <div class="github">
            <a href="" target="_blank"><i class="fab fa-github"></i>Marcola</a>
          </div>
          <div class="linkedin">
            <a href="" target="_blank"><i class="fab fa-linkedin"></i>Marcola</a>
          </div>
          <div class="discord">
            <a href="" target="_blank"><i class="fab fa-discord"></i>Tropa do Truco</a>
          </div>
        </div>
      </div>
      <div class="contributers2">
        <div class="contrib-row">
          <div class="github">
            <a href="" target="_blank"><i class="fab fa-github"></i>Kudraque</a>
          </div>
          <div class="linkedin">
            <a href="" target="_blank"><i class="fab fa-linkedin"></i>Kudraque</a>
          </div>
          <div class="discord">
            <a href="" target="_blank"><i class="fab fa-discord"></i>Kudraque</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/mobile.js"></script>
</body>

</html>