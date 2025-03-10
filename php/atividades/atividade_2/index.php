<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 Portal Futurista</title>
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
            max-width: 400px;
            margin: auto;
            backdrop-filter: blur(10px);
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            text-shadow: 0px 0px 10px cyan;
        }

        label {
            font-size: 16px;
            display: block;
            margin-top: 10px;
            text-shadow: 0px 0px 5px cyan;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            background: rgba(0, 0, 0, 0.5);
            color: cyan;
            text-align: center;
            font-size: 18px;
            box-shadow: 0px 0px 10px cyan;
        }

        input:focus {
            outline: none;
            box-shadow: 0px 0px 15px cyan;
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
    <h2>🚀 Bem-vindo ao Portal Futurista</h2>
    <form action="resultado.php" method="POST" onsubmit="return validarFormulario()">
        <label for="idade">🔹 Sua idade:</label>
        <input type="number" id="idade" name="idade" min="0" required>

        <label for="valor">💰 Valor em Dólar ($):</label>
        <input type="number" step="0.01" id="valor" name="valor" required>

        <button type="submit">Iniciar Missão 🚀</button>
    </form>
</div>

<script>
    function validarFormulario() {
        let idade = document.getElementById("idade").value;
        if (idade < 0) {
            alert("⛔ A idade não pode ser negativa! Por favor, insira um número válido.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>