<?php
include '../conexao.php';

$id = $_GET['id'] ?? 0;

// Buscar os dados da receita
$stmt = $conn->prepare("SELECT * FROM receitas WHERE id = ?");
$stmt->execute([$id]);
$receita = $stmt->fetch();

if (!$receita) {
    echo "Receita não encontrada.";
    exit;
}

// Atualizar os dados caso enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $texto = $_POST['receita'];
    $autor = $_POST['autor'];
    $tipo = $_POST['tipo'];
    $imagem = $receita['imagem']; // mantém a imagem atual por padrão

    // Se o usuário fez upload de uma nova imagem
    if ($_FILES['imagem']['name']) {
        $imagem = basename($_FILES['imagem']['name']);
        move_uploaded_file($_FILES['imagem']['tmp_name'], "../uploads/$imagem");
    }

    $update = $conn->prepare("UPDATE receitas 
        SET titulo = ?, descricao = ?, receita_texto = ?, autor = ?, tipo_receita = ?, imagem = ? 
        WHERE id = ?");
    $update->execute([$titulo, $descricao, $texto, $autor, $tipo, $imagem, $id]);

    echo "Receita atualizada com sucesso! <a href='../receita.php?id=$id'>Ver Receita</a>";
    exit;
}
?>

<h2>Editar Receita</h2>
<form method="POST" enctype="multipart/form-data">
    <input name="titulo" value="<?= htmlspecialchars($receita['titulo']) ?>" placeholder="Título"><br>
    <textarea name="descricao" placeholder="Descrição"><?= htmlspecialchars($receita['descricao']) ?></textarea><br>
    <textarea name="receita" placeholder="Texto da Receita"><?= htmlspecialchars($receita['receita_texto']) ?></textarea><br>
    <input name="autor" value="<?= htmlspecialchars($receita['autor']) ?>" placeholder="Autor"><br>
    <input name="tipo" value="<?= htmlspecialchars($receita['tipo_receita']) ?>" placeholder="Tipo (Doce/Salgado)"><br>
    
    <?php if ($receita['imagem']): ?>
        <p>Imagem atual:</p>
        <img src="../uploads/<?= $receita['imagem'] ?>" width="200"><br>
    <?php endif; ?>
    
    <label>Nova imagem (opcional):</label><br>
    <input type="file" name="imagem"><br><br>
    
    <button type="submit">Atualizar Receita</button>
</form>