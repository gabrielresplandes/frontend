<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $descricao = $_POST['descricao'];
    $avaliacao = $_POST['avaliacao'];

    $stmt = $conn->prepare("UPDATE livros SET nome=?, imagem=?, descricao=?, avaliacao=? WHERE id=?");
    $stmt->bind_param("sssdi", $nome, $imagem, $descricao, $avaliacao, $id);
    $stmt->execute();
    header("Location: index.php");
}

$sql = "SELECT * FROM livros WHERE id=$id";
$result = $conn->query($sql);
$livro = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<div class="container">
    <h1><i class="fas fa-edit"></i> Editar Livro</h1>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $livro['nome'] ?>" required>

        <label>URL da Imagem:</label>
        <input type="text" name="imagem" value="<?= $livro['imagem'] ?>" required>

        <label>Descrição:</label>
        <textarea name="descricao" rows="4" required><?= $livro['descricao'] ?></textarea>

        <label>Avaliação (0 a 5):</label>
        <input type="number" step="0.1" max="5" min="0" name="avaliacao" value="<?= $livro['avaliacao'] ?>" required>

        <button type="submit"><i class="fas fa-sync-alt"></i> Atualizar</button>
    </form>
</div>
</body>
</html>