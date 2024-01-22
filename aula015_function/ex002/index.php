<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicío PHP</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <section id="resultado">
        <h2>Resultado</h2>
            <?php
            include "funcoes.php";
            echo "<h1>Testando novas funções</h1>";
            ola();
            mostraValor(44);
            ?>
    </section>
</body>
</html>