<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = $_GET["t"] ?? "Texto não digitado";
        $tam = $_GET["tam"] . "pt" ?? "12pt";    
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
        if ($txt === "") {
            $txt = "Texto não digitado";
        } else {
            
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
        p {
            text-align: right;
            text-decoration: underline;
        }
        p:hover {
            color: #577fbd;
        }
        a:hover {
            color: #577fbd;
        }
    </style>
</head>
<body>
    <div> 
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <p><a href="http://localhost/curso-php/aula08/execicio03.html">Voltar</a></p>
    </div>
</body>
</html>