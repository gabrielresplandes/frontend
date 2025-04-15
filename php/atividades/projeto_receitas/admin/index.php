<?php
include '../conexao.php';

$stmt = $conn->query("SELECT * FROM receitas ORDER BY id DESC");
$receitas = $stmt->fetchAll();
?>

<h1>Painel de Administração</h1>
<a href="cadastrar.php">➕ Cadastrar Nova Receita</a><br><br>
<a href="admin/index.php">🔧 Painel Administrativo</a>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Tipo</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($receitas as $r): ?>
        <tr>
            <td><?= $r['id'] ?></td>
            <td><?= htmlspecialchars($r['titulo']) ?></td>
            <td><?= htmlspecialchars($r['autor']) ?></td>
            <td><?= htmlspecialchars($r['tipo_receita']) ?></td>
            <td>
                <a href="editar.php?id=<?= $r['id'] ?>">✏️ Editar</a> | 
                <a href="deletar.php?id=<?= $r['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir esta receita?')">🗑️ Deletar</a> |
                <a href="../receita.php?id=<?= $r['id'] ?>" target="_blank">🔍 Ver</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
