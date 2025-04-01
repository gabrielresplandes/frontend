<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Tech</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<div class="container">
    <h1><i class="fas fa-book"></i> Livros Cadastrados</h1>
    <a href="cadastro.php"><button><i class="fas fa-plus-circle"></i> Novo Livro</button></a>

    <?php
    $sql = "SELECT * FROM livros";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<div class='livro-container'>";
        echo "<img src='" . $row['imagem'] . "' alt='Capa'>";
        echo "<div class='info'>";
        echo "<h3><i class='fas fa-book-open'></i> " . $row['nome'] . "</h3>";
        echo "<p>" . $row['descricao'] . "</p>";
        echo "<strong>Avaliação: " . $row['avaliacao'] . " / 5</strong><br>";
        echo "<a href='editar.php?id=" . $row['id'] . "'><i class='fas fa-edit'></i> Editar</a>";
        echo "</div></div>";
    }

    $conn->close();
    ?>
</div>
</body>
</html>