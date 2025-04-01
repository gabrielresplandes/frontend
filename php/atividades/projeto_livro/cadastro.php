<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $descricao = $_POST['descricao'];
    $avaliacao = $_POST['avaliacao'];

    $stmt = $conn->prepare("INSERT INTO livros (nome, imagem, descricao, avaliacao) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $nome, $imagem, $descricao, $avaliacao);
    $stmt->execute();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<div class="container">
    <h1><i class="fas fa-plus-circle"></i> Cadastrar Novo Livro</h1>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>URL da Imagem:</label>
        <input type="text" name="imagem" required>

        <label>Descrição:</label>
        <textarea name="descricao" rows="4" required></textarea>

        <label>Avaliação (0 a 5):</label>
        <input type="number" step="0.1" max="5" min="0" name="avaliacao" required>

        <button type="submit"><i class="fas fa-save"></i> Salvar</button>
    </form>
</div>
</body>
</html>
