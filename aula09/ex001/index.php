<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicío PHP</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <?php
    $valor1 = $_GET['idade'] ?? 0;
    $idade = date('Y') - $valor1;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="idade">Ano de nascimento:</label>
            <input type="number" name="idade" id="idade" placeholder="4 digitos" value="" required>
            <!-- <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value=""> -->
            <input type="submit" value="Verificar"> 
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php
        echo "Você nasceu em $valor1 e tera $idade anos. <br/>";
        if ($idade >= 18) {            
            $v =  "ja pode votar";
            $d =  "ja pode dirigir!";
        } else {
            $v = "não pode votar";
            $d =  "não pode dirigir!";
        }
        echo "Com $idade anos você $v e também $d";
        ?>
    </section>
    
</body>
</html>