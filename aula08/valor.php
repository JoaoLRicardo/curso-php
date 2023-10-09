<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php            
            $valor = $_GET["v"] ?? 0;
            if ($valor >= 0) {
                $rq = sqrt($valor);
                $format = number_format($rq, 2);
                echo "A raiz de <strong>$valor</strong> é igual a \u{1F449} <strong>$format</strong>";
            } else {
                echo "<p>Valor inválido!</p>";
                echo "<p>Por favor digite um número positivo para saber sua raiz</p>";
            }
        ?>        
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </div>
</body>
</html>