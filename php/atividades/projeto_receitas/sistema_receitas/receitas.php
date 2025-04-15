<?php include '../conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Receitas</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #fff7e6, #ffeacc);
        }
        header {
            background-color: #ff8c42;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }
        form {
            text-align: center;
            margin-bottom: 30px;
        }
        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h3 {
            margin-top: 0;
        }
        .botao {
            background-color: #ff8c42;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .botao:hover {
            background-color: #e6762f;
        }
    </style>
</head>
<body>
    <header>
        <h1>🍰 Receitas Disponíveis</h1>
    </header>

    <div class="container">
        <form method="GET">
            <label for="tipo">Filtrar por tipo:</label>
            <select name="tipo" id="tipo" onchange="this.form.submit()">
                <option value="">Todas</option>
                <option value="Doce" <?= ($_GET['tipo'] ?? '') === 'Doce' ? 'selected' : '' ?>>Doce</option>
                <option value="Salgado" <?= ($_GET['tipo'] ?? '') === 'Salgado' ? 'selected' : '' ?>>Salgado</option>
            </select>
        </form>

        <div class="grid">
            <?php
            $tipo = $_GET['tipo'] ?? '';
            $sql = $tipo ? "SELECT * FROM receitas WHERE tipo_receita = ?" : "SELECT * FROM receitas";
            $stmt = $conn->prepare($sql);
            $tipo ? $stmt->execute([$tipo]) : $stmt->execute();
            $receitas = $stmt->fetchAll();

            if (count($receitas) > 0) {
                foreach ($receitas as $r) {
                    echo "<div class='card'>
                            <h3>" . htmlspecialchars($r['titulo']) . "</h3>
                            <p><strong>Autor:</strong> " . htmlspecialchars($r['autor']) . "</p>
                            <p>" . nl2br(substr($r['descricao'], 0, 100)) . "...</p>
                            <a class='botao' href='receita.php?id={$r['id']}'>Ver Receita</a>
                          </div>";
                }
            } else {
                echo "<p style='text-align:center;'>Nenhuma receita encontrada.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>