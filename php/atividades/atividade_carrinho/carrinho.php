<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="carrinho-container">
    <div class="carrinho shadow-lg">
        <h2 class="text-center mb-4">🛍️ Carrinho de Compras</h2>
        <?php if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])): ?>
            <p class="text-center text-muted">Seu carrinho está vazio.</p>
        <?php else: ?>
            <ul class="list-group mb-4">
                <?php 
                $total = 0;
                foreach ($_SESSION['carrinho'] as $item): 
                    $total += $item['preco'];
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $item['nome'] ?> - R$ <?= number_format($item['preco'], 2, ',', '.') ?>
                        <span class="badge bg-primary rounded-pill">✔️</span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="text-end">
                <h4>Total: R$ <?= number_format($total, 2, ',', '.') ?></h4>
            </div>
        <?php endif; ?>

        <div class="carrinho-acoes mt-4">
            <a href="index.php" class="btn btn-secondary">↩️ Continuar Comprando</a>
            <a href="limpar.php" class="btn btn-danger">🗑️ Limpar Carrinho</a>
        </div>
    </div>
</div>

</body>
</html>