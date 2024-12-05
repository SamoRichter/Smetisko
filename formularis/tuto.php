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
    $meno = $_POST['Meno'];
    $priezvisko = $_POST['Priezvisko'];
    $email = $_POST['Email'];
    $pass = $_POST['Heslo'];
    $pass_potvrd = $_POST['Potvrdenie_Hesla'];
    $pohlavie = $_POST['Pohlavie'] ?? "";
    $krajina = $_POST['Krajina'] ?? "";
    $suhlas = isset($_POST['Suhlas']);

$chyby = [];







if($pass != $pass_potvrd){
    array_push($chyby, "Hesla sa nezhoduju");
}
if($krajina == 'Vyber'){
    array_push($chyby, "Nezadal si krajinu");
}
if($suhlas == false){
    array_push($chyby, "Nesuhlasil si");
}


if( empty($chyby )){
    echo '<table>';
    echo '<tr>';
    echo '<td>'. $meno . '</td>'. "<br>" ;
    echo '</tr>';
    echo '<tr>';
    echo '<td>'. $priezvisko . '</td>'. "<br>" ;
echo '</tr>';
echo '<tr>';
echo '<td>'. $email . '</td>'. "<br>" ;
echo '</tr>';
echo '<tr>';
echo '<td>'. $pass . '</td>'. "<br>" ;
echo '</tr>';
echo '<tr>';
echo '<td>'. $pass_potvrd . '</td>'. "<br>" ;
echo '</tr>';
echo '<tr>';
echo '<td>'. $pohlavie . '</td>'. "<br>" ;
echo '</tr>';
echo '<tr>';
echo '<td>'. $krajina . '</td>'. "<br>" ;
echo '</tr>';
echo '</table>';
}
else{
    foreach($chyby as $chyba){
        echo '<ul>';
        echo '<li>'. $chyba . '</li>' . '<br>';
        echo '</ul>';
    }
    
}
?>

</body>
</html>