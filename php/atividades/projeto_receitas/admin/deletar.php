<?php
include '../conexao.php';
$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("DELETE FROM receitas WHERE id = ?");
$stmt->execute([$id]);

echo "Receita deletada com sucesso! <a href='../receitas.php'>Voltar</a>";