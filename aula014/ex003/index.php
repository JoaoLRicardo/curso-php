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
            function soma()
            {
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for ($i=0; $i<$t; $i++) {
                    $s += $p[$i];
                }
                return $s;
            }

            $r = soma(3, 7, 6, 4, 5);
            echo "<p>A soma é $r</p>";
            $x = 30;
            $y = 20;
            $z = 10;
            $r = soma($x, $y, $z);
            echo "<p>A soma entre $x, $y e $z é $r</p>";
            ?>
    </section>
</body>
</html>