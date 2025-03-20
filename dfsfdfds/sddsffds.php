<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            background-color: lightgray;
        }

    </style>
</head>
<body>

    <table>
            <tr >
                <th>Meno</th>
                <th> Trieda </th>
            </tr>
            <?php
            
            $ziaci = [
                'Alexej Bako' => [
                    'Trieda' => '3.C'
                ],
                'Peťko Kotov' => [
                    'Trieda' => '4.A'
                ],
                'Jozef Preklenka' => [
                    'Trieda' => '8.B'
                ],
                'Prokop Buben' => [
                    'Trieda' => '3.A'
                ],
                'Anton Antol' => [
                    'Trieda' => '5.B'
                ],
                'Vin Benzín' => [
                    'Trieda' => '2.C'
                ],
                'Somko Kotný' => [
                    'Trieda' => '7.B'
                ],
                'Boghdan Barylko' => [
                    'Trieda' => '8.C'
                ],
                'Otto Agapas' => [
                    'Trieda' => '1.A'
                ],
                'Abdul Muzzil' => [
                    'Trieda' => '5.A'
                ],
            ];

            foreach ($ziaci as $meno => $daco) {
                echo "<tr>";
                echo "<td>$meno</td>";
                echo "<td>{$daco['Trieda']}</td>";
                echo "</tr>";
            }
            ?>
    </table>

</body>
</html>
