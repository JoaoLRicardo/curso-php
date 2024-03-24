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
        <pre>
        <?php  
            // $a = 5;
            // $b = 3;
            // $c = ($a>$b)?true:false;
            // print $c;

            // $a=10;
            // $b=2;
            // $j=$a/2;
            // for ($i=0;$i<$j;$i++){
            //     if ($i % $b == 1) 
            //     echo "$i";
            // }
            function f($v, $n) {
                if ($n <= 0) return 1;
                else
                return $v[$n-1] * f($v, $n-2) + 1;
            }
            $a = array(0,1,2,3);
            print (f($a, 4));

            // function mensagens() {
            //     for($i=1; $i<=3; $i++) { echo “Olá”; }
            //  }
            //  mensagens();
        ?>
        </pre>
    </section>
</body>

</html>