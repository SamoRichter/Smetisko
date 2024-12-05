<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Cislo_1 = $_POST['prve_cislo'];
    $Cislo_2 = $_POST['druhe_cislo'];
    $Znak = $_POST['Znaky'];


    if ($Znak == 'Scitanie'){
        echo $Cislo_1 + $Cislo_2;
    }
    elseif($Znak == 'Odcitanie'){
        echo $Cislo_1 - $Cislo_2;
    }
    elseif($Znak == 'Nasobenie'){
        echo $Cislo_1 * $Cislo_2;
    }
    else{
        echo $Cislo_1 / $Cislo_2;
    }




?>
</body>
</html>