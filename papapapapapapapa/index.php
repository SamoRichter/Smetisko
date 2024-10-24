<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jeden = 5;
    $jeden2 = 55;
    $jeden3 = 12;

    if ($jeden >= $jeden2 && $jeden >= $jeden3) {
        echo "cislo " . "$jeden " .  "je najvacsie"; }

    if ($jeden2 >= $jeden && $jeden2 >= $jeden3) {
        echo "cislo " . "$jeden2 " .  " je najvacsie"; }

    if ($jeden3 >= $jeden && $jeden3 >= $jeden2) {
        echo "cislo " . "$jeden3 " .  " je najvacsie"; }

        echo"<br>";

    if ($jeden <= $jeden2 && $jeden <= $jeden3) {
        echo "cislo " . "$jeden " .  "je najmensie"; }
   
    if ($jeden2 <= $jeden && $jeden2 <= $jeden3) {
        echo "cislo " . "$jeden2 " .  " je najmensie"; }
   
    if ($jeden3 <= $jeden && $jeden3 <= $jeden2) {
        echo "cislo " . "$jeden3 " .  " je najmensie"; }
   

    ?>
</body>
</html>