<?php
session_start();
$_SESSION['carrinho'] = [];

echo "<script>
    localStorage.setItem('carrinhoLimpo', 'true');
    window.location.href = 'carrinho.php';
</script>";
exit;