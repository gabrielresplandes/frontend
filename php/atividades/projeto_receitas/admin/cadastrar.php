<?php
include '../conexao.php';

if ($_POST) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $receita = $_POST['receita'];
    $autor = $_POST['autor'];
    $tipo = $_POST['tipo'];
    $imagem = null;

    if ($_FILES['imagem']['name']) {
        $imagem = basename($_FILES['imagem']['name']);
        move_uploaded_file($_FILES['imagem']['tmp_name'], "../uploads/$imagem");
    }

    $stmt = $conn->prepare("INSERT INTO receitas (titulo, descricao, receita_texto, autor, tipo_receita, imagem)
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$titulo, $descricao, $receita, $autor, $tipo, $imagem]);

    echo "Receita cadastrada com sucesso!";
}
?>

<form method="POST" enctype="multipart/form-data">
    <input name="titulo" placeholder="Título"><br>
    <textarea name="descricao" placeholder="Descrição"></textarea><br>
    <textarea name="receita" placeholder="Texto da Receita"></textarea><br>
    <input name="autor" placeholder="Autor"><br>
    <input name="tipo" placeholder="Tipo (Doce/Salgado)"><br>
    <input type="file" name="imagem"><br>
    <button type="submit">Cadastrar</button>
</form>