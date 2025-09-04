<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <title>MyDrugs</title>
</head>

<body>
  <div class="fixed">
    <navbar id="nav">
      <div class="navbar_container">
        <div class="container-mobile">
          <button id="btn-mobile"><span id="hamburger"></span></button>
          <div class="logo-mobile">
            <a href="index.html"><img src="./img/logos/WhiteLogo.png" class="logo-mobile" alt="Logo MyDrugs"></a>
          </div>
        </div>
        <ul id="menu">
          <li class="home-mobile">
            <a href="index.php"id="close">início</a>
          </li>
          <li class="navbar_items">
            <a href="html/shop.php" class="blue" id="close">loja</a>
          </li>
          <li class="navbar_items">
            <a href="html/faq.php" class="green" id="close">dúvidas</a>
          </li>
          <li id="logo-mobile">
            <a href="index.php"><img src="./img/logos/WhiteLogo.png" id="#logo-mobile " class="logo" alt="Logo MyDrugs"></a>
          </li>
          <li class="navbar_items">
            <a href="html/contact.php" class="red" id="close">contato</a>
          </li>
          <li class="navbar_items">
            <a href="html/login.php" class="orange" id="close">login</a>
          </li>
          <li class="navbar_items" id="li-logout" style="display:none">
            <button id="logoutBtn" style="background:#ff3535;color:white;padding:8px 24px;border:none;border-radius:8px;font-size:16px;font-weight:bold;cursor:pointer;">Sair</button>
          </li>
        </ul>
      </div>
    </navbar>
  </div>
  <div class="slideshow">

  </div>
  <script src="./js/mobile.js"></script>
  <script src="./js/carrosel.js"></script>
  <script>
    const carrousel = new Carrousel({
      el: ".slideshow",
      imgs: [
        "./img/SliderImages/logo_main_page.png",
        "./img/SliderImages/Slide_Blue_Pill.jpg",
        "./img/SliderImages/Slide_Green_Pill.jpg",
        "./img/SliderImages/Slide_Purple_Pill.jpg",
        "./img/SliderImages/Slide_Red_Pill.jpg"
      ]
    })
  </script>
  <script>
    // Exibe botão de sair se estiver logado
    if (localStorage.getItem('devLogged') === 'true') {
      document.getElementById('li-logout').style.display = 'block';
    }
    // Logout
    const logoutBtn = document.getElementById('logoutBtn');
    if (logoutBtn) {
      logoutBtn.onclick = function() {
        localStorage.removeItem('devLogged');
        window.location.reload();
      }
    }
  </script>
</body>

</html>