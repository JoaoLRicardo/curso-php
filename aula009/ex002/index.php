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
        <h1>Verificador de voto</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="idade">Ano de nascimento:</label>
            <input type="number" name="idade" id="idade" placeholder="4 digitos" value="">
            <!-- <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value=""> -->
            <input type="submit" value="Verificar"> 
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php
        if ($idade < 16) {            
            $tipoVoto =  "não é permitido votar!";
        } elseif ($idade >= 16 && $idade < 18  || $idade > 65) {
            $tipoVoto = "o voto é opcional.";
        } else {
            $tipoVoto = "é obrigatório votar!";
        }
        echo "Com $idade anos $tipoVoto"
        ?>
    </section>
    
</body>
</html>

