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
$str = "Les choses que l'on possède finissent par nous posséder.";
$reversed_str = mb_convert_encoding(strrev(mb_convert_encoding($str, 'UTF-16BE', 'UTF-8')), 'UTF-8', 'UTF-16LE');
echo $reversed_str;
?>

</body>
</html>