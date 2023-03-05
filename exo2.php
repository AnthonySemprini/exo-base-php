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

    <p>Écrivez un algorithme qui détermine si un nombre est pair ou impair. L'algorithme doit afficher un message indiquant si le nombre est pair ou impair.</p>

    <form action="exo2.php" method="post">
        <input type="text" name="nbr">
        <input type="submit">
    </form>

</body>

</html>

<?php

$n = $_POST['nbr'];

if ($n % 2 == 1)
    echo "<br>$n est impair";
else
    echo "<br>$n est pair";
