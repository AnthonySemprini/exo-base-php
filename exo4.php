<h1>exo-base-php</h1>

<p>Écrivez un algorithme qui détermine si un nombre est premier ou non.</p>

<?php

$n = 89;
$is_prime = true;

if ($n < 2) {
    $is_prime = false;
}
else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $is_prime = false;
            break;
        }
    }
}

if ($is_prime) {
    echo $n . " est un nombre premier.";
}
else {
    echo $n . " n'est pas un nombre premier.";
}


