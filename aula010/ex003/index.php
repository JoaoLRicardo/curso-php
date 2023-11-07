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
    $uf = $_GET['uf'] ?? 0;
    ?>
    <main>
        <h1>Selecione uma opção</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            Estados do Brasil:
            <fieldset><legend>Selecione um estado</legend>
            <select name="uf" id="uf" required>
                <option value="1" selected>Acre</option>
                <option value="2">Alagoas</option>
                <option value="3">Amapá</option>
                <option value="4">Amazonas</option>
                <option value="5">Bahia</option>
                <option value="6">Ceará</option>
                <option value="27">Distrito Federal</option>
                <option value="7">Espírito Santo</option>
                <option value="8">Goiás</option>
                <option value="9">Maranhão</option>
                <option value="10">Mato Grosso</option>
                <option value="11">Mato Grosso do Sul</option>
                <option value="12">Minas Gerais</option>
                <option value="13">Pará</option>
                <option value="14">Paraíba</option>
                <option value="15">Paraná</option>
                <option value="16">Pernambuco</option>
                <option value="17">Piauí</option>
                <option value="18">Rio de Janeiro</option>
                <option value="19">Rio Grande do Norte</option>
                <option value="20">Rio Grande do Sul</option>
                <option value="21">Rondônia</option>
                <option value="22">Roraima</option>
                <option value="23">Santa Catarina</option>
                <option value="24">São Paulo</option>
                <option value="25">Sergipe</option>
                <option value="26">Tocantins</option>
            </select>
            </fieldset>
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            switch ($uf) {
                case 1:
                case 3:
                case 4:
                case 13:
                case 21:
                case 22:
                case 26:
                    echo 'Esse estado pertence a região <strong>Norte</strong>';
                    break;
                case 2:
                case 5:
                case 6:
                case 9:
                case 14:
                case 16:
                case 17:
                case 19:
                case 25:
                    echo 'Esse estado pertence a região <strong>Norteste</strong>';
                    break;
                case 8:
                case 10:
                case 11:
                case 27:
                    echo 'Esse estado pertence a região <strong>Centro-Oeste</strong>';
                    break;
                case 7:
                case 12:
                case 18:
                case 24:
                    echo 'Esse estado pertence a região <strong>Sudeste</strong>';
                    break;
                case 15:
                case 23:
                case 20:
                    echo 'Esse estado pertence a região <strong>Sul</strong>';
                    break;
                default:
                    echo 'Opção inválida!';
            }
    ?>
        <!-- <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button> -->
    </section>
    
</body>
</html>