<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Introdução</title>
</head>
<body>
    <h1>
        Hello World!
    </h1>

    <?php 
        echo "GABRIEL MORAIS <br>";
        echo "GABRIEL <br>";
        echo "MORAIS <br>";

        $palavra = "Bolo";
        echo $palavra;

        echo date("d/M/y");
        echo "Todos os direitos reservados @".date("Y");
        echo "<br>";
        date_default_timezone_set("America/Sao_Paulo");
        echo date_default_timezone_get();
        echo "<br>";
        echo date("G:i:s T");

        // phpinfo();
    ?>

</body>
</html>