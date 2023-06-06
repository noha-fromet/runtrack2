<!DOCTYPE html>
<html>
<head>
    <title>Job 06</title>
</head>
<body>

    <?php
function leetSpeak($str) {
    $leet = array('A' => '4', 'B' => '8', 'E' => '3', 'G' => '6', 'L' => '1', 'S' => '5', 'T' => '7');
    return strtr(strtoupper($str), $leet);
}
echo leetSpeak("LaPlateforme");

    ?>
</body>
</html>
