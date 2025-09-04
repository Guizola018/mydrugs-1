<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login de Desenvolvedor</title>
  <link rel="stylesheet" href="../css/login.css">
  <style>
    body { background: #0e0e0e; color: white; display: flex; justify-content: center; align-items: center; height: 100vh; }
    .login-container { background: #181818; padding: 40px 32px; border-radius: 16px; box-shadow: 0 0 16px #0008; display: flex; flex-direction: column; align-items: center; }
    .login-container h2 { margin-bottom: 24px; }
    .login-container input { margin-bottom: 16px; padding: 10px; border-radius: 8px; border: none; width: 220px; }
    .login-container button { background: #00b4ff; color: white; border: none; padding: 10px 32px; border-radius: 8px; font-size: 16px; cursor: pointer; font-weight: bold; }
    .login-container button:hover { background: #008fcc; }
    .error { color: #ff3535; margin-bottom: 10px; }
  </style>
</head>
<body>
  <a href="/mydrugs/index.php?page=shop" style="position:absolute;top:32px;left:32px;z-index:10;text-decoration:none;"> 
    <button style="background:#333;color:#fff;border:none;border-radius:8px;padding:10px 24px;font-size:1rem;font-weight:700;cursor:pointer;box-shadow:0 2px 8px #0002;">&larr; Voltar para loja</button>
  </a>
  <div class="login-container" style="max-width:400px;margin:64px auto;background:#232124;border-radius:16px;padding:32px 24px;box-shadow:0 2px 16px #0005;">
  <h2 style="text-align:center;color:#ff3571;font-size:2rem;font-weight:900;margin-bottom:24px;">Entrar</h2>
  <form id="loginForm" style="display:flex;flex-direction:column;gap:16px;">
    <input type="text" id="loginUser" placeholder="Usuário ou E-mail" required style="padding:12px;border-radius:8px;border:1px solid #333;background:#222;color:#fff;font-size:1rem;">
    <input type="password" id="loginPass" placeholder="Senha" required style="padding:12px;border-radius:8px;border:1px solid #333;background:#222;color:#fff;font-size:1rem;">
    <button type="submit" style="background:#ff3571;color:#fff;font-weight:700;font-size:1.1rem;border:none;border-radius:8px;padding:12px 0;cursor:pointer;">Entrar</button>
  </form>
  <hr style="margin:32px 0;border:0;border-top:1px solid #444;">
  <h2 style="text-align:center;color:#ffc300;font-size:1.5rem;font-weight:900;margin-bottom:18px;">Cadastre-se</h2>
  <form id="registerForm" style="display:flex;flex-direction:column;gap:16px;">
    <input type="text" id="regUser" placeholder="Nome de usuário" required style="padding:12px;border-radius:8px;border:1px solid #333;background:#222;color:#fff;font-size:1rem;">
    <input type="email" id="regEmail" placeholder="E-mail" required style="padding:12px;border-radius:8px;border:1px solid #333;background:#222;color:#fff;font-size:1rem;">
    <input type="password" id="regPass" placeholder="Senha" required style="padding:12px;border-radius:8px;border:1px solid #333;background:#222;color:#fff;font-size:1rem;">
    <input type="password" id="regPass2" placeholder="Confirme a senha" required style="padding:12px;border-radius:8px;border:1px solid #333;background:#222;color:#fff;font-size:1rem;">
    <button type="submit" style="background:#ffc300;color:#181818;font-weight:700;font-size:1.1rem;border:none;border-radius:8px;padding:12px 0;cursor:pointer;">Cadastrar</button>
  </form>
  <div id="registerMsg" style="margin-top:18px;text-align:center;color:#ff3571;font-weight:700;"></div>
</div>
  <script src="../js/login.js"></script>
  <script>
    
  
  const found = users.find(u => ((u.user && u.user.toLowerCase() === userOrEmail) || (u.usuario && u.usuario.toLowerCase() === userOrEmail) || (u.email && u.email.toLowerCase() === userOrEmail)) && u.pass === pass);
 ,
  if (found) {
    localStorage.setItem('usuarioLogado', JSON.stringify(found));
    alert('Login realizado com sucesso!');
    window.location.href = 'index.php';
  } else {

    alert('Usuário ou senha incorretos.');
  }
}
    // Mostrar/ocultar senha
    document.getElementById('showPassword').addEventListener('change', function() {
      const senhaInput = document.getElementById('senha');
      senhaInput.type = this.checked ? 'text' : 'password';
    });
    // Redireciona se já estiver logado
    if (localStorage.getItem('devLogged') === 'true') {
      window.location.href = 'index.php';
    }
    document.getElementById('voltarPrincipal').onclick = function() {
      window.location.href = 'index.php';
    }
    document.getElementById('registerForm').onsubmit = function(e) {
  e.preventDefault();
  const user = document.getElementById('regUser').value.trim();
  const email = document.getElementById('regEmail').value.trim();
  const pass = document.getElementById('regPass').value;
  const pass2 = document.getElementById('regPass2').value;
  const msg = document.getElementById('registerMsg');
  if (!user || !email || !pass || !pass2) {
    msg.textContent = 'Preencha todos os campos.';
    return;
  }
  if (pass !== pass2) {
    msg.textContent = 'As senhas não conferem.';
    return;
  }
  // Simulação de cadastro local (pode ser trocado por backend)
  let users = JSON.parse(localStorage.getItem('users') || '[]');
  if (users.find(u => u.user === user || u.email === email)) {
    msg.textContent = 'Usuário ou e-mail já cadastrado.';
    return;
  }
  users.push({ user, email, pass });
  localStorage.setItem('users', JSON.stringify(users));
  msg.style.color = '#3bb54a';
  msg.textContent = 'Cadastro realizado com sucesso!';
  document.getElementById('registerForm').reset();
};
  </script>
</body>
