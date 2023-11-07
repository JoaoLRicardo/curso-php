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
            function soma($a, $b)
            {
                return $a + $b;
            }

            $r = soma(33, 4);
            echo "<p>A soma é $r</p>";
            $x = 210;
            $y = 230;
            $r = soma($x, $y);
            echo "<p>A soma entre $x e $y é $r</p>";
            ?>
    </section>
</body>
</html>