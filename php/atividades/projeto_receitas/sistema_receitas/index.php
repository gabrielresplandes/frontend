<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home - Sistema de Receitas</title>
    <style>
        body {
            background: linear-gradient(to right, #fdf6e3, #fceabb);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            font-size: 32px;
            color: #ff8c42;
        }
        .btn {
            display: inline-block;
            margin: 20px 10px 0;
            padding: 12px 25px;
            font-size: 16px;
            text-decoration: none;
            color: white;
            border-radius: 10px;
            transition: background 0.3s;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .btn.receitas {
            background-color: #28a745;
        }
        .btn.admin {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🍽️ Bem-vindo ao Sistema de Receitas</h1>
        <a class="btn receitas" href="receitas.php">Ver Receitas</a>
        <a class="btn admin" href="../admin/index.php">Painel Administrativo</a>
    </div>
</body>
</html>