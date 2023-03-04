<h1>exo-base-PHP</h1>

<p>Écrivez un algorithme qui calcule la somme des entiers de 1 à n.</p>

<?php


$n =12;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
}

echo "La somme des entiers de 1 à " . $n . " est " . $sum;
?>
