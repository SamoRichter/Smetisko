<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výdavky a príjmy</title>
    <style>
        table {
            text-align: center;
            margin: 20px auto;
            border-collapse: collapse;
            color: white;
            font-size: x-large;
            text-shadow: -0.5px -0.5px 0 #000, 0.5px -0.5px 0 #000, -0.5px 0.5px 0 #000, 0.5px 0.5px 0 #000;
            

        }
        td {
            padding: 10px;
            border: 1px solid black;
            text-align: center;
        }
        h1 {
            text-align: center;
        }

    </style>
</head>
<body>
    <?php

    $prijem = $_POST['Prijem'];
    $rezerva = $_POST['Rezerva'];
    $byvanie = $_POST['Byvanie'];
    $auto = $_POST['Auto'];
    $bezne = $_POST['Bezne'];

    $rezerva2 = $prijem /100 * 10 ;
    $byvanie2 = $prijem / 100 * 25;
    $auto2 = $prijem /100 * 10;
    $bezne2 = $prijem /100 * 50;
    $vydavky2 = $rezerva2 + $byvanie2 + $auto2 + $bezne2;
    $zostatok2 = $prijem - $vydavky2;

    $vydavky = $rezerva + $byvanie + $auto + $bezne;
    $zostatok = $prijem - $vydavky;

    $prijempercento = 100;
    $rezervapercento = round(($rezerva / $prijem) * 100);
    $byvaniepercento = round(($byvanie / $prijem) * 100);
    $autopercento = round(($auto / $prijem) * 100);
    $beznepercento = round(($bezne / $prijem) * 100);
    $vydavkypercento = round(($vydavky / $prijem) * 100);
    $zostatokpercento = round(($zostatok / $prijem) * 100);

    $rezervapercento2 = round(($rezerva2 / $prijem) * 100);
    $byvaniepercento2 = round(($byvanie2 / $prijem) * 100);
    $autopercento2 = round(($auto2 / $prijem) * 100);
    $beznepercento2 = round(($bezne2 / $prijem) * 100);
    $vydavkypercento2 = round(($vydavky2 / $prijem) * 100);
    $zostatokpercento2 = round(($zostatok2 / $prijem) * 100);



    echo "<h1>Tvoje výdavky</h1>";

    echo "<table>
    <tr>
        <td style='background-color: grey;'>Príjem</td>
        <td style='background-color: grey;'>".$prijempercento." %</td>
        <td style='background-color: grey;'>".$prijem." EUR</td>
    </tr>
    <tr>";

        if ($rezervapercento <= 10) {
            echo "<td style='background-color: lightgreen;'>Rezerva</td>";
            echo "<td style='background-color: lightgreen;'>".$rezervapercento." %</td>";
            echo "<td style='background-color: lightgreen;'>".$rezerva." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Rezerva</td>";
            echo "<td style='background-color: lightcoral;'>".$rezervapercento." %</td>";
            echo "<td style='background-color: lightcoral;'>".$rezerva." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($byvaniepercento <= 25) {
            echo "<td style='background-color: lightgreen;'>Byvanie</td>";
            echo "<td style='background-color: lightgreen;'>".$byvaniepercento." %</td>";
            echo "<td style='background-color: lightgreen;'>".$byvanie." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Byvanie</td>";
            echo "<td style='background-color: lightcoral;'>".$byvaniepercento." %</td>";
            echo "<td style='background-color: lightcoral;'>".$byvanie." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($autopercento <= 10) {
            echo "<td style='background-color: lightgreen;'>Auto</td>";
            echo "<td style='background-color: lightgreen;'>".$autopercento." %</td>";
            echo "<td style='background-color: lightgreen;'>".$auto." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Auto</td>";
            echo "<td style='background-color: lightcoral;'>".$autopercento." %</td>";
            echo "<td style='background-color: lightcoral;'>".$auto." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($beznepercento <= 50) {
            echo "<td style='background-color: lightgreen;'>Bezne</td>";
            echo "<td style='background-color: lightgreen;'>".$beznepercento." %</td>";
            echo "<td style='background-color: lightgreen;'>".$bezne." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Bezne</td>";
            echo "<td style='background-color: lightcoral;'>".$beznepercento." %</td>";
            echo "<td style='background-color: lightcoral;'>".$bezne." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($vydavkypercento <= 100) {
            echo "<td style='background-color: lightgreen;'>Celkové výdavky</td>";
            echo "<td style='background-color: lightgreen;'>".$vydavkypercento." %</td>";
            echo "<td style='background-color: lightgreen;'>".$vydavky." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Celkové výdavky</td>";
            echo "<td style='background-color: lightcoral;'>".$vydavkypercento." %</td>";
            echo "<td style='background-color: lightcoral;'>".$vydavky." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($zostatokpercento <= 100) {
            echo "<td style='background-color: lightgreen;'>Zostatok</td>";
            echo "<td style='background-color: lightgreen;'>".$zostatokpercento." %</td>";
            echo "<td style='background-color: lightgreen;'>".$zostatok." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Zostatok</td>";
            echo "<td style='background-color: lightcoral;'>".$zostatokpercento." %</td>";
            echo "<td style='background-color: lightcoral;'>".$zostatok." EUR</td>";
        }

echo "</tr>
</table>";





    if($zostatok <= 0){
        echo "<p style='color: red; text-align: center;'>Tvoje výdavky sú väčšie ako príjmy, prehodnoť svoje výdavky.</p>";
    }
    echo "<h1>Ideálne výdavky</h1>";
    
    echo "<table>
    <tr>
        <td style='background-color: grey;'>Príjem</td>
        <td style='background-color: grey;'>".$prijempercento." %</td>
        <td style='background-color: grey;'>".$prijem." EUR</td>
    </tr>
    <tr>";

        if ($rezervapercento2 <= 10) {
            echo "<td style='background-color: lightgreen;'>Rezerva</td>";
            echo "<td style='background-color: lightgreen;'>".$rezervapercento2." %</td>";
            echo "<td style='background-color: lightgreen;'>".$rezerva." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Rezerva</td>";
            echo "<td style='background-color: lightcoral;'>".$rezervapercento2." %</td>";
            echo "<td style='background-color: lightcoral;'>".$rezerva." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($byvaniepercento2 <= 25) {
            echo "<td style='background-color: lightgreen;'>Byvanie</td>";
            echo "<td style='background-color: lightgreen;'>".$byvaniepercento2." %</td>";
            echo "<td style='background-color: lightgreen;'>".$byvanie." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Byvanie</td>";
            echo "<td style='background-color: lightcoral;'>".$byvaniepercento2." %</td>";
            echo "<td style='background-color: lightcoral;'>".$byvanie." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($autopercento2 <= 10) {
            echo "<td style='background-color: lightgreen;'>Auto</td>";
            echo "<td style='background-color: lightgreen;'>".$autopercento2." %</td>";
            echo "<td style='background-color: lightgreen;'>".$auto." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Auto</td>";
            echo "<td style='background-color: lightcoral;'>".$autopercento2." %</td>";
            echo "<td style='background-color: lightcoral;'>".$auto." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($beznepercento2 <= 50) {
            echo "<td style='background-color: lightgreen;'>Bezne</td>";
            echo "<td style='background-color: lightgreen;'>".$beznepercento2." %</td>";
            echo "<td style='background-color: lightgreen;'>".$bezne." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Bezne</td>";
            echo "<td style='background-color: lightcoral;'>".$beznepercento2." %</td>";
            echo "<td style='background-color: lightcoral;'>".$bezne." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($vydavkypercento2 <= 100) {
            echo "<td style='background-color: lightgreen;'>Celkové výdavky</td>";
            echo "<td style='background-color: lightgreen;'>".$vydavkypercento2." %</td>";
            echo "<td style='background-color: lightgreen;'>".$vydavky." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Celkové výdavky</td>";
            echo "<td style='background-color: lightcoral;'>".$vydavkypercento2." %</td>";
            echo "<td style='background-color: lightcoral;'>".$vydavky." EUR</td>";
        }

echo "</tr>
<tr>";

        if ($zostatokpercento2 <= 100) {
            echo "<td style='background-color: lightgreen;'>Zostatok</td>";
            echo "<td style='background-color: lightgreen;'>".$zostatokpercento2." %</td>";
            echo "<td style='background-color: lightgreen;'>".$zostatok." EUR</td>";
        } else {
            echo "<td style='background-color: lightcoral;'>Zostatok</td>";
            echo "<td style='background-color: lightcoral;'>".$zostatokpercento2." %</td>";
            echo "<td style='background-color: lightcoral;'>".$zostatok." EUR</td>";
        }

echo "</tr>
</table>";




    ?>
</body>
</html>
