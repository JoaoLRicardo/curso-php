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
        <?php 
        $c = 1;
        while ($c <= 5) {
            echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0' required><br/>";
            $c ++;
        }
        ?>
        <input type="submit" value="Enviar">
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
            <?php
            $i = 1;
            while ($i <= 5) {
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = $_GET[$url] ?? 0;
                $i ++;
            }

            $i = 1;
            while ($i <=5) {
                $v = "num" . $i;
                echo "Valor $i : " . $$v . "<br/>";
                $i ++;
            }
            ?>
    </section>
</body>
</html>