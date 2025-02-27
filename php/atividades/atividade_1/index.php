<?php
$livro = [
    'titulo' => 'O Senhor dos Anéis',
    'autor' => 'J.R.R. Tolkien',
    'descricao' => 'Uma das maiores obras da literatura fantástica, contando a jornada de Frodo e o Um Anel.',
    'preco' => 'R$ 49,90',
    'imagem' => 'image/senhor-dos-aneis.jpg'
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Livros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h2 {
            margin-bottom: 10px;
        }
        p {
            color: #555;
        }
        .preco {
            font-size: 18px;
            font-weight: bold;
            color: #27ae60;
        }
        .botao-comprar {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .botao-comprar:hover {
            background-color: #2980b9;
        }
        .livro img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="<?php echo $livro['imagem']; ?>" alt="<?php echo $livro['titulo']; ?>">
        <h2><?php echo $livro['titulo']; ?></h2>
        <p><strong>Autor:</strong> <?php echo $livro['autor']; ?></p>
        <p><?php echo $livro['descricao']; ?></p>
        <p class="preco"><?php echo $livro['preco']; ?></p>
        <a href="#" class="botao-comprar">Comprar Agora</a>
    </div>
</body>
</html>
