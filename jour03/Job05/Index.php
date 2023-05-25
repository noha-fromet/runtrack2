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
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
echo $str . "<br>";
$dic = array("consonnes" => 0, "voyelles" => 0);
$vowels = array('a', 'e', 'i', 'o', 'u', 'y');
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array(strtolower($str[$i]), $vowels)) {
        $dic["voyelles"]++;
    } elseif (ctype_alpha($str[$i])) {
        $dic["consonnes"]++;
    }
}
echo "<table><thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead><tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody></table>";
?>
</body>
</html>