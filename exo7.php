<h1>exo-base-php</h1>

<p>Écrivez un algorithme qui prend une liste de nombres entiers et retourne la somme de tous les nombres impairs de la liste.</p>

<?php

$nbrs = [3,5,15,8,9,11,12,14,16,13];
$result = 0;
foreach ($nbrs as $nbr) {
    if ($nbr%2 == 1){
    $result+=$nbr; //additionne tous les nombres impairs
}
}
echo "La somme des nombres impairs : " . $result;