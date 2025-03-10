<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 Resultados Futuristas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        body {
            background: linear-gradient(45deg, #0f2027, #203a43, #2c5364);
            background-size: 400% 400%;
            animation: gradientBG 10s infinite alternate;
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            text-align: center;
            padding: 50px;
            overflow: hidden;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 255, 255, 0.5);
            max-width: 500px;
            margin: auto;
            backdrop-filter: blur(10px);
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            text-shadow: 0px 0px 10px cyan;
        }

        .box {
            background: rgba(0, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            font-size: 20px;
            margin: 10px;
            box-shadow: 0px 0px 15px cyan;
            transition: 0.3s;
        }

        .box:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 25px cyan;
        }

        .emoji {
            font-size: 40px;
            text-shadow: 0px 0px 10px cyan;
        }

        button {
            background: linear-gradient(90deg, cyan, blue);
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            color: white;
            cursor: pointer;
            border-radius: 10px;
            text-transform: uppercase;
            font-weight: bold;
            box-shadow: 0px 0px 20px cyan;
            transition: all 0.3s;
            width: 100%;
            margin-top: 20px;
        }

        button:hover {
            background: linear-gradient(90deg, blue, cyan);
            transform: scale(1.05);
            box-shadow: 0px 0px 30px cyan;
        }

        @keyframes glow {
            0% { box-shadow: 0px 0px 10px cyan; }
            100% { box-shadow: 0px 0px 30px cyan; }
        }

        button:active {
            animation: glow 0.3s alternate infinite;
        }

        /* Animação de partículas futuristas */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 5px;
            height: 5px;
            background: cyan;
            border-radius: 50%;
            opacity: 0.7;
            animation: moveParticle 10s linear infinite;
        }

        @keyframes moveParticle {
            from { transform: translateY(0px); opacity: 1; }
            to { transform: translateY(100vh); opacity: 0; }
        }
    </style>
</head>
<body>

<!-- Fundo animado -->
<div class="particles">
    <?php for ($i = 0; $i < 50; $i++): ?>
        <div class="particle" style="left: <?= rand(0, 100) ?>vw; top: <?= rand(0, 100) ?>vh; animation-duration: <?= rand(5, 15) ?>s;"></div>
    <?php endfor; ?>
</div>

<div class="container">
    <h2>✨ Resultados da Simulação ✨</h2>

    <?php
    // Captura os dados do formulário
    $idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0;
    $valorDolar = isset($_POST['valor']) ? (float)$_POST['valor'] : 0;

    // Se a idade for negativa, ajustamos para 0
    if ($idade < 0) {
        $idade = 0;
    }

    // Obtendo a cotação do dólar em tempo real via API
    $api_url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
    $response = file_get_contents($api_url);
    $data = json_decode($response, true);

    // Verifica se a cotação foi obtida com sucesso
    $cotacaoDolar = ($data && isset($data['USDBRL']['bid'])) ? floatval($data['USDBRL']['bid']) : 5.10;

    // Conversão de moeda
    $valorConvertido = $valorDolar * $cotacaoDolar;

    // Verificação de idade
    $mensagemIdade = $idade >= 18 ? "✅ Você pode acessar!" : "⛔ Acesso negado, jovem padawan!";

    // Número aleatório
    $numeroAleatorio = rand(1, 100);
    ?>

    <div class="box">
        <span class="emoji">💰</span>
        <p><strong>Cotação Atual:</strong> $1 USD = R$<?php echo number_format($cotacaoDolar, 2, ',', '.'); ?></p>
        <p><strong>Conversão:</strong> $<?php echo number_format($valorDolar, 2, ',', '.'); ?> ➡ R$<?php echo number_format($valorConvertido, 2, ',', '.'); ?></p>
    </div>

    <div class="box">
        <span class="emoji">🎂</span>
        <p><strong>Idade:</strong> <?php echo $mensagemIdade; ?></p>
    </div>

    <div class="box">
        <span class="emoji">🎲</span>
        <p><strong>Número aleatório:</strong> <?php echo $numeroAleatorio; ?></p>
    </div>

    <a href="index.php">
        <button>🔄 Tentar novamente</button>
    </a>
</div>

</body>
</html>
