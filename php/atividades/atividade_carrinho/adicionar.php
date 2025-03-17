<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (isset($_GET['produto']) && isset($_GET['preco'])) {
    $produto = [
        "nome" => $_GET['produto'],
        "preco" => (float)$_GET['preco']
    ];
    $_SESSION['carrinho'][] = $produto;
}

echo "<script>
    localStorage.setItem('produtoAdicionado', 'true');
    window.location.href = 'index.php';
</script>";
exit;