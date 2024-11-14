<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PriemerZnámok</title>
    <style>
        table, td{
            border: solid black 1px;
        }
    </style>
</head>
<body>
    <?php
            $cenaSpolu = 0;
            
            
            $nakupny_zoznam = [  
                'Chleba' => [
                    'mnozstvo' => 2,
                    'cena' => 1.80
                    //2.16
                ],
                'Jogurt' => [
                    'mnozstvo' => 5,        
                    'cena' => 0.89
                ],
                'Šunka Amálka' => [
                    'mnozstvo' => 2,
                    'cena' => 1.19
                ],
                'Šúlance' => [
                    'mnozstvo' => 1,
                    'cena' => 1.69,
                ],
                'Maslo' => [
                    'mnozstvo' => 1,
                    'cena' => 3.50,
                    ]
                ];
                
                echo "<table border='0' cellpadding='7' cellspacing='0' style='text-align: center;'>";
                echo "<tr><th>Položka</th><th>Množstvo</th><th>Cena</th></tr>";
                
                echo"<tr>";
                
                foreach ($nakupny_zoznam as $nazov => $položka) {
                    echo "<td>" . $nazov ."</td>";
                    echo "<td>". $položka['mnozstvo'] . "ks</td>";
                    echo "<td>". $položka['cena'] . "€</td>";
                    
                    echo "</tr>";
                    
                    $cenaSpolu += $položka['cena'] * $položka['mnozstvo'];
                }
                
                echo "<td>" . "</td>";
                echo "<td style='font-weight: bolder'>". "Cena spolu" ."</td>";
                echo "<td style='font-weight: bolder'>". $cenaSpolu . "€</td>";
                
                $dph20 = $cenaSpolu * 0.20;
                $dph23 = $cenaSpolu * 0.23;
                $cena20DPH = $cenaSpolu + $dph20;
                $cena23DPH = $cenaSpolu + $dph23;
                $rozdiel = $cena23DPH - $cena20DPH;
                
                echo "<br>Cena s 20% DPH: " . $cena20DPH . "€<br>";
                echo "Cena s 23% DPH: " . $cena23DPH . "€<br>";
                echo "Rozdiel medzi 20% a 23% DPH: " . $rozdiel . "€";
                
                
                echo "</table>";
                
                ?>
</body>
</html>