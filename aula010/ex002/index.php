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
    $opr = $_GET['ds'] ?? 0;
    ?>
    <main>
        <h1>Selecione uma opção</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            Dia da semana:
            <fieldset><legend>Selecione o dia</legend>
            <select name="ds" id="ds" required>
                <option value="1" selected>Segunda-feira</option>
                <option value="2">Terça-feira</option>
                <option value="3">Quarta-feira</option>
                <option value="4">Quinta-feira</option>
                <option value="5">Sexta-feira</option>
                <option value="6">Sábado</option>
                <option value="7">Domingo</option>
            </select>
            </fieldset>
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            switch ($opr) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    echo "Você precisa ir para escola!";
                    break;
                case 6:
                case 7:
                    echo "Hoje não tem aula!";
                    break;
                default:
                echo 'Opção inválida!';
            }
        ?>
        <!-- <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button> -->
    </section>
    
</body>
</html>