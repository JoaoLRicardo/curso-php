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
        <select name="num" id="num">
            <?php 
            while ($c <= 10) {
                echo "<option value='$c'>$c </option>";
                $c ++;
            }
            ?>
        </select>
        <input type="submit" value="Verificar">
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
            <?php
            $n = $_GET['num'] ?? 0;
            $c = 1;
            if ($n == 0 || $n == '' || $n > 10) {
                echo "Selecione um número para ver a sua tabuada!";
            } else {
                while ($c <= 10) {
                    echo $n . "x" . $c . "=" . $n * $c;
                    echo "<br/>\n";
                    $c ++;
                }
            }
            ?>
    </section>
</body>
</html>