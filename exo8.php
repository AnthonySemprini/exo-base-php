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

    <p>Écrivez un algorithme qui prend un nombre entier et affiche tous les nombres pairs de 0 à ce nombre.</p>

    <form action="exo8.php" method="post">
        <input type="text" name="nbr">
        <input type="submit">
    </form>

</body>

</html>

<?php

$nbr = $_POST["nbr"];

echo "Les nombres pairs de 0 à " . $nbr . " sont : ";
for ($i = 0; $i <= $nbr; $i += 2) {
    echo $i . " ";
}
?>