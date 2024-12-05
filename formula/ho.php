<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $chyby = [];


$meno = $_POST['Meno'];
$priezvisko = $_POST['Priezvisko'];
$email = $_POST['Email'];
$pass = $_POST['Heslo'];
$pass_potvrd = $_POST['Potvrdenie_Hesla'];
$pohlavie = $_POST['Pohlavie'] ?? "";
$krajina = $_POST['Krajina'] ?? "";

echo $meno . "<br>";
echo $priezvisko . "<br>";
echo $email . "<br>";
echo $pass . "<br>";
echo $pass_potvrd . "<br>";
if($pass == $pass_potvrd){
    echo "Hesla sa zhoduju <br>";
}
else{
    echo "Hesla sa nezhoduju <br>";
}
echo $pohlavie . "<br>";
echo $krajina . "<br>";

    ?>

</body>
</html>