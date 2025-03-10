<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../styles/all.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php"></a>Log Out</li>
            </ul>
        </nav>
    </header>

    <main>
        <?php 
            // $titulo = "Matrix";
            // var_dump($titulo);
            // $status = True;
            // var_dump($status)
            var_dump($_REQUEST); // get, post, cookies

            $nome = $_REQUEST['nome'];
            $email = $_REQUEST['email'];
            $senha = $_REQUEST['senha'];

            echo "Olá $nome, seja bem-vindo <br>" ;
            echo "Olá $nome, seu e-mail é $email <br>" ;
            echo "e sua senha é $senha" ;
            

        ?>
    </main>

    <footer>
        Todos os direitos reservados a @Gabriel Morais
        <?php 
            echo date("Y");
        ?>
    </footer>
</body>
</html>