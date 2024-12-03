<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha uma Forma</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Escolha uma Forma Geométrica</h1>

        <form action="/criar-forma" method="POST">
            @csrf
            <label for="tipo">Selecione a Forma:</label>
            <select name="tipo" id="tipo">
                <option value="circulo">Círculo</option>
                <option value="quadrado">Quadrado</option>
                <option value="retangulo">Retângulo</option>
                <option value="triangulo">Triângulo</option>
            </select>

            <button type="submit">Criar Forma</button>
        </form>
    </div>
</body>
</html>
