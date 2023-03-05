<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

   <h1>exo-base-php</h1>

   <p>Écrivez un algorithme qui calcule la moyenne de trois nombres resultat 1 chiffre apres la virgule.</p>




</body>

</html>


<?php


$nbr1 = 11;
$nbr2 = 19;
$nbr3 = 13;


$result = (($nbr1 + $nbr2 + $nbr3) / 3);
$moyenne = round($result, 1);
echo "Moyenne des nombres : " . $moyenne;

?>