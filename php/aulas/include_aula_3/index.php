<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>
    <a href="pagina2.php">Pag 2</a>
    <?php
    include "server/header.php";
    include "server/teste.php";
    include "server/teste.php";

    require "server/teste2.php";
    ?>
    
</body>
</html>