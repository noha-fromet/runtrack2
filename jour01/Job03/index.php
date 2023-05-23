<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<?php

$myBool = true;
$myInt = 2;
$myString = "Hello";
$myFloat = 3;

echo "<table>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
echo "<tr><td>" . gettype($myBool) . "</td><td>myBool</td><td>" . $myBool . "</td></tr>";
echo "<tr><td>" . gettype($myInt) . "</td><td>myInt</td><td>" . $myInt . "</td></tr>";
echo "<tr><td>" . gettype($myString) . "</td><td>myString</td><td>" . $myString . "</td></tr>";
echo "<tr><td>" . gettype($myFloat) . "</td><td>myFloat</td><td>" . $myFloat . "</td></tr>";
echo "</table>";

?>
</body>
</html>
