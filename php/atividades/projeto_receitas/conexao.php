<?php
$host = 'localhost';
$db = 'sistema_receitas';
$user = 'root';
$pass = ''; // Ajuste conforme seu ambiente

$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
?>