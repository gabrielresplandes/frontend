<?php
$conn = new mysqli("localhost", "root", "", "comida");
if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
$sql = "SELECT * FROM catalogo";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Comidas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>🍔 Catálogo de Comidas</h1>
        <div class="grid">
            <?php while ($item = $resultado->fetch_assoc()) { ?>
                <div class="card">
                <img src="images/<?php echo $item['imagem']; ?>" alt="<?php echo $item['nome']; ?>">
                    <h2><?php echo $item['nome']; ?></h2>
                    <p><?php echo $item['descricao']; ?></p>
                    <span class="preco">R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></span>
                    <button class="btn">Adicionar ao carrinho</button>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>