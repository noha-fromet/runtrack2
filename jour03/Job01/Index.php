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
$numbers = array(200, 204, 173, 98, 171, 404, 459);
echo "<table>";
echo "<tr><th>Nombre</th><th>Paire/impaire</th></tr>";
foreach ($numbers as $number) {
    echo "<tr><td>$number</td>";
    if ($number % 2 == 0) {
        echo "<td>paire</td>";
    } else {
        echo "<td>impaire</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>