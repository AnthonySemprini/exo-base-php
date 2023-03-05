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

    <p>Écrivez un algorithme qui prend deux nombres entiers et affiche leur somme et leur différence.</p>

    <form action="exo5.php" method="post">
        <input type="text" name="nbr1">
        <input type="text" name="nbr2">
        <input type="submit">
    </form>

</body>

</html>

<?php

$n1 = $_POST['nbr1'];
$n2 = $_POST['nbr2'];

$adResult = ($n1 + $n2);
$difresult = ($n1 - $n2);

echo "la somme deux nombres entiers : $adResult<br>";
echo "la différence deux nombres entiers : $difresult<br>";
