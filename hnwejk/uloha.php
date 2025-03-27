<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



function pocitanie($x) {
    $random = [];
    for ($i = 0; $i < $x; $i++) {
        $random[] = rand(1, 6);
    }

    foreach ($random as $cislo) {
        echo $cislo . " ";
    }
    echo "<br>";

    $counts = [0, 0, 0, 0, 0, 0];
    foreach ($random as $cislo) {
        $counts[$cislo - 1]++;
    }

    echo "<br>";
    for ($i = 0; $i < 6; $i++) {
        echo "Číslo " . ($i + 1) . ": " . $counts[$i] . "<br>";
    }
}

pocitanie(100);


?>
</body>
</html>