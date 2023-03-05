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

    <p>Écrivez un algorithme qui détermine si un nombre est premier ou non.</p>

    <form action="exo4.php" method="post">
        <input type="text" name="nbr">
        <input type="submit">
    </form>

</body>

</html>

<?php

$n = $_POST['nbr'];
$is_prime = true;

if ($n < 2) {
    $is_prime = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $is_prime = false;
            break;
        }
    }
}

if ($is_prime) {
    echo "<br>" . $n . " est un nombre premier.";
} else {
    echo "<br>" . $n . " n'est pas un nombre premier.";
}
