<?php

$host = 'localhost'; // Adresa databázového servera (lokálny server)
$dbname = "test_db"; // názov databázy
$username = 'root'; // Používateľské meno databázy
$password = ''; // Heslo k databáze (prázdne na lokálnom serveri)


// Pripojenie k databáze
try {  // Pokúša sa vytvoriť PDO pripojenie k databáze:

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password); 

     // definuje pripojenie k databáze MySQL s konkrétnym názvom databázy a znakovou sadou UTF-8,  
    // $username, $password - prihlasovacie údaje k databáze, 
    // $pdo – objekt PDO, ktorý nám umožní komunikovať s databázou.


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    //ak nastane chyba, vyvolá sa výnimka (Exception) a skript sa zastaví. Pomáha pri debugovaní chýb. 


} catch (PDOException $e) {  //– zachytí chybu PDO.
    die("Chyba pripojenia: " . $e->getMessage());  //– zobrazí chybovú správu a zastaví skript.
}





// Skontrolujeme, či boli odoslané údaje
if ($_SERVER["REQUEST_METHOD"] == "POST") {  //Skontroluje, či bol formulár odoslaný metódou POST (čiže bol odoslaný z HTML formulára).
    $meno = $_POST['meno'];
    $priezvisko = $_POST["priezvisko"];;  //načíta hodnoty z formuláru 

    // SQL príkaz na vloženie údajov do databázy 
    $sql = 'INSERT INTO users (meno, priezvisko) VALUES (:meno, :priezvisko)'; 
    
    //INSERT INTO users (meno, priezvisko)  - určuje, že budeme vkladať údaje do tabuľky "users", do stĺpcov "meno" a "priezvisko".

    // VALUES (:meno, :priezvisko) – používame parametre :meno a :priezvisko namiesto priameho vkladania hodnôt (bezpečnejší spôsob - zabraňuje SQL injekciám-typ útoku).


    $stmt = $pdo->prepare($sql);  // prepare() – vytvorí pripravený príkaz, ktorý sa ešte nevykonal, ešte neobsahuje skutočné hodnoty, vloží ho do premennej $stmt (statement)

    $stmt->execute(["meno" => $meno, "priezvisko" => $priezvisko]);
     // Metóda execute() nahradí parametre v SQL príkaze skutočnými hodnotami a spustí SQL príkaz. ["meno" => $meno, "heslo" => $heslo] je asociatívne pole, ktoré obsahuje hodnoty, ktoré sa dosadia do :meno a :heslo.



    echo 'Údaje boli úspešne uložené!';
}
?>