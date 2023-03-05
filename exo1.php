<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>exo-base-PHP</h1>

    <p>Écrivez un algorithme qui calcule la somme des entiers de 1 à $n.</p>

    <form action="exo1.php" method="post">
        <input type="text" name="nbr">
        <input type="submit">
    </form>

</body>

</html>

<?php

$n = $_POST['nbr'];

$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
}

echo "<br>La somme des entiers de 1 à " . $n . " est " . $sum;
?>