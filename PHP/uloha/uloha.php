<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toto</title>
</head>
<body>
<?php
    $miesta = ["Vlkolínec", "Kalameny", "Suchá Belá", "Plačlivô", "Banská Štiavnica", "Slavkovský štít", "Vtáčnik", "Útulňa Andrejcová"];
    array_push($miesta, "Koš", "Prievidza", "Čavoj");
    $pocet_miest = count($miesta);
    echo "Pocet miest na dovolenke, ktore chcete navstívit: " . $pocet_miest . "<br>";
    echo "<br>";
    echo "Zoznam miest:<br>";
    foreach ($miesta as $miesto) {
        echo $miesto . "<br>";
    }
    $zorad = array(random_int(1, 100), random_int(1, 100), random_int(1, 100), random_int(1, 100), random_int(1, 100));
    echo "<br> Náhodné hodnoty: " . implode(", ", $zorad) . "<br>";
    sort($zorad);
    echo "Vzostupne zoradené hodnoty: " . implode(", ", $zorad) . "<br>";
    rsort($zorad);
    echo "Zostupne zoradené hodnoty: " . implode(", ", $zorad) . "<br>";
?>
</body>
</html>