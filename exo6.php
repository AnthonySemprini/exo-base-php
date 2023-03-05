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

    <p>Écrivez une chaîne de caractères et affiche le nombre de caractères de la chaîne.</p>

    <form action="exo6.php" method="post">
        <input type="text" name="string">
        <input type="submit">
    </form>

</body>

</html>

<?php

$string = $_POST['string'];
echo "<br>La chaine de caracteres : " . "<h4>$string</h4>" .
    " a " . strlen($string) . " caractères.";
