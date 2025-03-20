<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function zhodaHesla($heslo, $potvrdenieHesla) {
        if ($heslo == $potvrdenieHesla) {
            return true;
        } else {
            return false;
        }
    }

    function Dlzka($heslo) {
        return strlen($heslo) >= 8;
    }

    function VelkePismeno($heslo) {
        return preg_match('/[A-Z]/', $heslo);
    }

    function MalePismeno($heslo) {
        return preg_match('/[a-z]/', $heslo);
    }
    function Cislo($heslo) {
        return preg_match('/[0-9]/', $heslo);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $heslo = $_POST['heslo'];
        $potvrdenieHesla = $_POST['potvrdenieHesla'];

        if (!zhodaHesla($heslo, $potvrdenieHesla)) {
            echo "Hesla sa nezhoduju";
        } elseif (!Dlzka($heslo)) {
            echo "Heslo musi mat aspon 8 znakov";
        } elseif (!VelkePismeno($heslo)) {
            echo "Heslo musi mat aspon jedno velke pismeno";
        } elseif (!MalePismeno($heslo)) {
            echo "Heslo musi mat aspon jedno male pismeno";
        }
        elseif (!Cislo($heslo)) {
            echo "Heslo musi mat aspon jedno cislo";
        } 
         else {
            echo "Heslo je ok";
        }
    }
    ?>

</body>
</html>