<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <main>
        <h1>CADASTRO</h1>

        <form action="pages/menu.php" method="get">
            <!-- NOME USUARIO -->
            <div class="form-input">
                <label for="nome">Nome</label>
                <input placeholder="Insira seu nome completo Ex Tom Becker" name="nome" id="nome" type="text">
            </div>
            <!-- EMAIL USUARIO -->
            <div class="form-input">
                <label for="email">E-mail</label>
                <input placeholder="Insira seu email Ex nome@gmail.com" name="email" id="email" type="text">
            </div>
            <!-- SENHA USUARIO -->
            <div class="form-input">
                <label for="senha">Senha</label>
                <input placeholder="Insira sua senha" name="senha" id="senha" type="password">
            </div>
            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>