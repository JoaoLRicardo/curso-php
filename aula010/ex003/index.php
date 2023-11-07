<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicío PHP</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <?php
    $nota1 = (float) $_GET['v1'] ?? 0;
    $nota2 = (float) $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Nota 1:</label>
            <input type="number" step="0.01" name="v1" id="v1" placeholder="" value="">
            <label for="v2">Nota 2:</label>
            <input type="number" step="0.01" name="v2" id="v2" value="">
            <input type="submit" value="Média">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php
        if ($nota1 && $nota2) {
            $media = ($nota1 + $nota2) / 2;
            echo "A média entre $nota1 e $nota2 é $media";
        } else {
            echo "Digite duas notas para saber a média entre elas!";
        }
        ?>
    </section>
    
</body>
</html>