<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $prve = $_POST['prve'];
        $druhe = $_POST['druhe'];
        $znamienko = $_POST['znamienko'];
 
        if($znamienko == 'plus'){
            echo $prve . ' + ' . $druhe . ' = ' . $prve + $druhe;
        } elseif($znamienko == 'minus'){
            echo $prve . ' - ' . $druhe . ' = ' . $prve - $druhe;
        } elseif($znamienko == 'krat'){
            echo $prve . ' * ' . $druhe . ' = ' . $prve * $druhe;
        }else{
            echo $prve . ' / ' . $druhe . ' = ' . $prve / $druhe;
        }
    ?>
</body>
</html>