<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicío PHP</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <!-- <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="ini">Inicío</label>
        <input type="number" name="ini" id="ini" max="100">
        <label for="fim">Fim</label>
        <input type="number" name="fim" id="fim" max="100">
        <label for="ic">Incremento</label>
        <input type="number" name="ic" id="ic" max="100">
        <input type="submit" value="Enviar">
    </main> -->
    <section id="resultado">
        <h2>Resultado</h2>
            <?php
            $c = 1;
            do {
                echo " $c";
                $c ++;
            } while ($c <= 10);
            ?>
    </section>
</body>
</html>