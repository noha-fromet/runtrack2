<!DOCTYPE html>
<html>
<head>
    <title>Job 04</title>
</head>
<body>
    <?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            return $nombre1 / $nombre2;
        case '%':
            return $nombre1 % $nombre2;
    }
}
echo calcule(1, '+', 2);

    ?>
</body>
</html>
