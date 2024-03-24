<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="_css/style.css">
</head>

<body>
    <section id="resultado">
        <?php
            $p = "Leite";
            $pr = 4.5;
            // echo "O $p custa R$ $pr";
            printf ("O %s custa R$ %.2f", $p, $pr);
        ?>
    </section>
</body>

</html>