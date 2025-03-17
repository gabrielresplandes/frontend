<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online - Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</head>
<body>

<header class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">🛒 E-Commerce</a>
        <a href="carrinho.php" class="btn btn-warning position-relative">
            🛍️ Ver Carrinho
            <?php if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0): ?>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <?= count($_SESSION['carrinho']) ?>
                </span>
            <?php endif; ?>
        </a>
    </div>
</header>

<div class="container my-5">
    <h1 class="text-center mb-4">📦 Produtos Disponíveis</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php 
        $produtos = [
            ["nome" => "Notebook", "imagem" => "notebook.jpg", "preco" => 2500.00],
            ["nome" => "Mouse", "imagem" => "mouse.jpg", "preco" => 50.00],
            ["nome" => "Teclado", "imagem" => "teclado.jpg", "preco" => 120.00],
            ["nome" => "Monitor", "imagem" => "monitor.jpg", "preco" => 800.00]
        ];

        foreach ($produtos as $produto): ?>
            <div class="col">
                <div class="card produto-card h-100 shadow-sm">
                    <img src="images/<?= $produto['imagem'] ?>" class="card-img-top" alt="<?= $produto['nome'] ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $produto['nome'] ?></h5>
                        <p class="card-text text-muted">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                        <a href="adicionar.php?produto=<?= urlencode($produto['nome']) ?>&preco=<?= $produto['preco'] ?>" class="btn btn-success add-btn">+ Adicionar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>