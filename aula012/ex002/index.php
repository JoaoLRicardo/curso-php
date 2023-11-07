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
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="ini">Valor</label>
        <input type="number" name="num" id="num" min="1" max="50" maxlength="20" >
        <input type="submit" value="Fatorial">
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
            <?php
            $c = $_GET['num'] ?? 1;
            $f = 1;
            while ($c > 0) {
                echo $c;
                if ($c > 1) {
                    echo " x ";
                } else {
                    echo " = ";
                }
                $f *= $c;
                $c -= 1;
            }
            echo number_format($f, 0, ',', '.');
            ?>
    </section>
</body>
</html>