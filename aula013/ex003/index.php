<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicío PHP</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <main>
        <?php 
        $c = 1;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <legend>Selecione um número</legend>
        <label for="num">Número</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Verificar">
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
            <?php
            $tot = 0;
            $n = $_GET['num'] ?? 0;
            echo "Múltiplos: ";
            for ($c = 1; $c <= $n; $c ++) {
                if ($n % $c == 0) {
                    echo $c . " ";
                    $tot ++;
                }
            }
            echo "<br/>Total de múltiplos: $tot";
            if ($tot == 2) {
                echo "<br/>Resultado $n é primo!";
            } else {
                echo "<br/>Resultado $n não é primo!";
            }
            ?>
    </section>
</body>
</html>