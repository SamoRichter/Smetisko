<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
    <label for="priklad">Zadaj Priklad</label>
    <input type="text" id="priklad" name="priklad" required>
    <button type="submit" >Enter</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $priklad = trim($_POST['priklad']);
}
/*

        $c1 = (int) $priklad[0];
        $c2 = (int) $priklad[2];


switch ($priklad[1]){
    case "+":
        echo $c1 + $c2;
        break;
    case "-":
        echo $c1 - $c2;
        break;
    case "*":
        echo $c1 * $c2;
        break;
    case "/":
        echo $c1 / $c2;
        break;
}
*/

$dlzka = strlen($priklad);

for ($i = 0; $i < $dlzka; $i++) {
    echo $priklad[$i] . "    " . ord($priklad[$i]) . " zvisil si cislo o 3: ". ord($priklad[$i])+3 . '<br>';
}




?>


</body>
</html>