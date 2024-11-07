<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $polomer = 4;
        $pi = 3.14;

        $obvod = 2* M_PI * $polomer;
        $obsah = M_PI * ($polomer * $polomer);

        echo "Obvod je ". $obvod ."  <br>" . " Obsah je ". $obsah;

?>


</body>
</html>