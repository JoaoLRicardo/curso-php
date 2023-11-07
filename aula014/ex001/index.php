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
                $s = $a + $b;
                echo "<p>A soma vale $s</p>";
            }

            soma(33, 4);
            $x = 10;
            $y = 230;
            soma($x, $y);
            ?>
    </section>
</body>
</html>