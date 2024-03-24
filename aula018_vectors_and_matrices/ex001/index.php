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
            // $n = array(3, 5, 15, 6);
            // $n[] = 7;
            // print_r($n);

            // $n = range(5, 20, 5);
            // print_r($n);

            // $c = range(5, 20, 2);
            // foreach ($c as $item) {
            //     echo "<td>$item ";
            // }

            // $v = array(
            //     0 => 5,
            //     3 => 19,
            //     5 => 20,
            //     19 => 12
            // );
            // $v = array(
            //     'nome' => 'Ana',
            //     'idade' => '23',
            //     'peso' => 56.4,
            //     19 => 12
            // );
            // print_r($v);

            // $v = array(
            //     'nome' => 'Ana',
            //     'idade' => '23',
            //     'peso' => 56.4,
            //     19 => 12
            // );

            // foreach ($v as $key => $value) {
            //     echo "O campo $key possui o valor $value<br/>";
            // }

            $m = array(
                array(6, 5),
                array(4, 9),
                array(10, 8)
            ); 

            $m[0][1] = $m[2][0];
            print_r($m);

            ?>

        </pre>
    </section>
</body>

</html>