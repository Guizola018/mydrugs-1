// login.js
// Lógica de autenticação para a página de login dos desenvolvedores

document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('loginForm');
  if (form) {
    form.onsubmit = function(e) {
      e.preventDefault();
      const userOrEmail = document.getElementById('loginUser').value.trim().toLowerCase();
      const pass = document.getElementById('loginPass').value;
      let users = JSON.parse(localStorage.getItem('users') || '[]');
      // Aceita tanto 'user' quanto 'usuario' como campo
      const found = users.find(u => ((u.user && u.user.toLowerCase() === userOrEmail) || (u.usuario && u.usuario.toLowerCase() === userOrEmail) || (u.email && u.email.toLowerCase() === userOrEmail)) && u.pass === pass);
      if (found) {
        localStorage.setItem('usuarioLogado', JSON.stringify(found));
        window.location.href = 'index.html';
      } else {
        alert('Usuário ou senha incorretos.');
      }
    }
  }

  // Redireciona se já estiver logado
  if (localStorage.getItem('devLogged') === 'true') {
    window.location.href = 'index.html';
  }
});
