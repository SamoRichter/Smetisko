<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
/*
    $vek = 78;

    if($vek >= 18  && $vek < 56  ){
     echo "môžeme vstúpiť";

   }
   else {
      echo "nemôžeme vstúpiť";
    }

   $vek = 78;
   $obcianstvo = 'slovenske';

   if ($vek >= 18 && $obcianstvo == "slovenske" ){
    echo "môžem voliť";
   }
   else {
    echo "nemôžem voliť"; 
   }

*/

   $admin = false;
   $prihlaseny = false;

   if ($admin == true || $prihlaseny == true){
    echo "môžeme vstúpiť";
   }
   else {
    echo "nemôžem voliť"; 
   }



    ?>

</body>
</html>