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
            function teste(&$x)
            {
                $x += 2;
                echo "<p>O valor de X é $x</p>";
            }
            $a = 3;
            teste($a);
            echo "<p>O valor de A é $a</p>";
            ?>
    </section>
</body>
</html>