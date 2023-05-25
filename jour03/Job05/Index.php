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

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($j = 2; $j <= sqrt($num); $j++) {
        if ($num % $j == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 0; $i <=1000; $i++) {
    if (isPrime($i)) {
        echo $i;
        echo "<br>";
    }
}

?>
</body>
</html>