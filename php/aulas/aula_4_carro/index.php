<?php
    include('db/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f4f4f4;
        padding-top: 70px;
    }

    header {
        background-color: #1f2937;
        color: white;
        padding: 20px 0;
        position: fixed;
        top: 0;
        width: 100%;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        z-index: 1000;
    }

    nav {
        display: flex;
        justify-content: center;
        gap: 40px;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #3b82f6;
    }

    main {
        max-width: 900px;
        margin: auto;
        padding: 40px 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #1f2937;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    th, td {
        padding: 12px 16px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #3b82f6;
        color: white;
    }

    tr:hover {
        background-color: #f1f5f9;
    }
    </style>

</head>
<body>
    <header>
        <nav>
            <a href="index.php?menu=home">Home</a>
            <a href="index.php?menu=lista">Lista</a>
        </nav>
    </header>

    <main>
        <?php
        if(isset($_GET['menu'])){
            $pagina = $_GET['menu'];
        }else{
            $pagina = "home";
        }
            switch($pagina){
                case 'home':
                    include("pages/home/home.php");
                    break;
                case 'lista':
                    include("pages/listaCarros/listaCarros.php");
                    break;
                default:
                    include("pages/home/home.php");
                    break;
            }
        ?>
    </main>
</body>
</html>