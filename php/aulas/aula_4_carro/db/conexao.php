<?php
    include("config.php");

    $conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) or die("Erro na conexão com o serviço! Contate o administrador do sistema."). mysqli_connect_error();
?>