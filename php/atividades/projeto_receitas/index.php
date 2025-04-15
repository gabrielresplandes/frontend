<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Receitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 25px;
        }
        .btn {
            display: inline-block;
            padding: 12px 25px;
            margin: 10px;
            font-size: 16px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            background-color: #28a745;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background-color: #218838;
        }
        .admin {
            background-color: #007bff;
        }
        .admin:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🍽️ Bem-vindo ao Sistema de Receitas</h1>
        <a class="btn" href="sistemas_receitas/index.php">🏠 Ir para a Home</a>
        <a class="btn admin" href="admin/index.php">🔧 Painel Administrativo</a>
    </div>
</body>
</html>
