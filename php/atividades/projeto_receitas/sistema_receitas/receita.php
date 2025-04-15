<?php
include '../conexao.php';

$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM receitas WHERE id = ?");
$stmt->execute([$id]);
$r = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $r ? htmlspecialchars($r['titulo']) : 'Receita não encontrada' ?></title>
    <style>
        body {
            background: linear-gradient(to right, #fdfbf9, #fff3e6);
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #ff8c42;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1 {
            margin-top: 0;
        }
        .meta {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }
        .imagem {
            text-align: center;
            margin-bottom: 20px;
        }
        .imagem img {
            max-width: 100%;
            border-radius: 10px;
        }
        .texto {
            white-space: pre-line;
            line-height: 1.6;
        }
        a.voltar {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border-radius: 8px;
        }
        a.voltar:hover {
            background-color: #1f7a36;
        }
    </style>
</head>
<body>
    <header>
        <h1><?= $r ? htmlspecialchars($r['titulo']) : 'Receita não encontrada' ?></h1>
    </header>

    <div class="container">
        <?php if ($r): ?>
            <p class="meta">Autor: <?= htmlspecialchars($r['autor']) ?> | Tipo: <?= htmlspecialchars($r['tipo_receita']) ?></p>

            <?php if ($r['imagem']): ?>
                <div class="imagem">
                    <img src="../uploads/<?= $r['imagem'] ?>" alt="Imagem da Receita">
                </div>
            <?php endif; ?>

            <p class="texto"><?= nl2br($r['receita_texto']) ?></p>

            <a class="voltar" href="receitas.php">← Voltar para receitas</a>
        <?php else: ?>
            <p>Receita não encontrada!</p>
        <?php endif; ?>
    </div>
</body>
</html>
