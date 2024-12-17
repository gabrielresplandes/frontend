document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault();

  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();

  if (username === "admin" && password === "12345") {
    sessionStorage.setItem("isLoggedIn", "true"); // Armazena o status de login
    alert("Login bem-sucedido! Redirecionando para a intranet...");
    window.location.href = "./intranet.html";
  } else {
    alert("Usuário ou senha incorretos. Tente novamente.");
  }
});