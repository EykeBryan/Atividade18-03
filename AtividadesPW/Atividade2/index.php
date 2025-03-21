<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>
<body>
    <h1>Bem-vindo à Lanchonete!</h1>
    <form action="calcular.php" method="post">
        <p>Informe seu nome:</p>
        <input type="text" name="nome" required><br>
        
        <p>Escolha uma roupa:</p>
        <select name="roupa" required>
            <option value="">Selecione uma peça de roupa</option>
            <option value="1">Camisa - R$ 70,00</option>
            <option value="2">Calça - R$ 120,00</option>
            <option value="3">Bermuda - R$ 50,00</option>
            <option value="4">Meia - R$ 20,00</option>
            <option value="5">Cueca - R$ 30,00</option>
        </select><br><br>

        <p>Quantas peças de roupas você deseja comprar?</p>
        <input type="number" name="quantidadeRoupas" min="1" value="1" required><br><br>

        <p>Escolha um acessório:</p>
        <select name="acessorio" required>
            <option value="">Selecione um acessório</option>
            <option value="1">Relógio - R$ 150,00</option>
            <option value="2">Colar - R$ 90,00</option>
            <option value="3">Brecelete - R$ 50,00</option>
            <option value="4">Anel - R$ 80,00</option>
            <option value="5">Testeira - R$ 60,00</option>
        </select><br><br>

        <input type="submit" value="Fazer Pedido">
    </form>
</body>
</html>