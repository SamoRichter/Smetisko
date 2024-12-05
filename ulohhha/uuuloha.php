<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td {
            border: 1px solid black;
            text-align:center;
            width: 20%;
        }
    </style>
</head>
<body>
    <?php 

    $pass = $_POST['Heslo'];
    $pass_potvrd = $_POST['Potvrdenie_Hesla'];




if (strlen($pass) < 8) {
    echo "Heslo musi mat aspon 8 znakov";
} elseif ($pass !== $pass_potvrd) {

    echo "Hesla sa nezhoduju";
} else {
    echo "Hesla sa zhoduju a maju dostatočnu dlzku";
}

function Pocet_Znakov($pass, $pocet = 8) {
    if (strlen($pass) >= $pocet) {
        echo "Heslo je dostatocne dlhe";
    } else {
        echo "Heslo musi mat aspon 8 znakov";
    }


}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


Pocet_Znakov($pass, $pocet = 8);

?>

</body>
</html>