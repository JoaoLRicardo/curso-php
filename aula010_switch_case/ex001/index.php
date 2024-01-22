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
    $num = $_GET['num'] ?? 0;
    $opr = $_GET['opr'] ?? 1;
    $dobro = $num * 2;
    $cubo = pow($num, 3);
    $raiz = sqrt($num);
    ?>
    <main>
        <h1>Selecionar opções</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            Número: <input type="number" name="num" id="num" required>
            <fieldset>
                <legend>Operação</legend>
                <input type="radio" name="opr" id="dobro" value="1" checked>
                <label for="dobro">Dobro</label>
                <input type="radio" name="opr" id="cubo" value="2">
                <label for="cubo">Cubo</label>
                <input type="radio" name="opr" id="raiz" value="3">
                <label for="raiz">Raiz Quadrada</label>
            </fieldset>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php
        // if ($opr == 1) {
        //     echo "$dobro";
        // } elseif ($opr == 2) {
        //     echo "$cubo";
        // } elseif ($opr == 3) {
        //     echo "$raiz";
        // } else {
        //     echo "Opção inválida!";
        // }
        switch ($opr) {
            case 1:
                $dobro = $num * 2;
                echo "$dobro";
                break;
            case 2:
                $cubo = pow($num, 3);
                echo "$cubo";
                break;
            case 3:
                $raiz = sqrt($num);
                echo "$raiz";
                break;
            default:
                echo 'Opção inválida!';
        }
        ?>
        <!-- <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button> -->
    </section>

</body>

</html>