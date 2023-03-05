<h1>exo-base-php</h1>

<p>Écrivez un algorithme qui prend un nombre entier  et affiche tous les nombres pairs de 0 à ce nombre.</p>

<?php

$nbr = 36;

echo "Les nombres pairs de 0 à " . $nbr . " sont : ";
for ($i = 0; $i <= $nbr; $i += 2) {
    echo $i . " ";
}
?>
