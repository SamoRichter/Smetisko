<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nakup = ["krumple", "mrkvicky", "rajcinky", "tatranka", "slivovica", "cipsy", "voda", "vajca"];
        $cena = [1.5 , 1.3 , 1.4, 0.5, 5, 1, 0.7 , 1.8 ];
    /*
        for ($i = 0; $i < count($nakup); $i++) {
            echo $nakup[$i] ;
        }
        */
        echo"<pre>";
        echo print_r( $nakup );
        echo"<pre>";

        echo"<pre>";
        echo print_r( $cena );
        echo"<pre>";

        unset( $nakup[3], $cena[3] );

        echo"<pre>";
        echo print_r( $nakup );
        echo"<pre>";

        echo"<pre>";
        echo print_r( $cena );
        echo"<pre>";

        array_push($nakup, "lego");
        array_push($cena, "15");






    ?>
</body>
</html>