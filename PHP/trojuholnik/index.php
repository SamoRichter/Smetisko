<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 4.5;
    $c = 9.5;

    if( (($a + $b) > $c  ) || ($a + $c ) > $b || ($b + $c) > $a) {
        echo "trojuholnik zo stranami " . "$a cm, $b cm, $c cm " . "sa da zostavit";
    }
    else {
        echo "trojuholnik zo stranami " . "$a cm, $b cm, $c cm " . "sa neda zostavit"; }


    if ( ($a*$a + $b*$b) == $c*$c || ($a*$a + $c*$c) == $b*$b || ($b*$b + $c*$c) == $a*$a) {
        echo "trojuholnik je pravouhly";
    }
?>
</body>
</html>