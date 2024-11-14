<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            text-align: center;
            border: 2px solid black;
        }
        .seda {
            background-color: grey;
        }
    </style>
</head>
<body>
    <?php
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
 
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "<tr class= seda >";
        } else {
            echo "<tr>";
        }

        for ($x = 1; $x <= 10; $x++) {
            echo "<td>" . $i * $x . "</td>";
        }

        echo "</tr>";
    }
echo"     </table>";
    ?>
</body>
</html>