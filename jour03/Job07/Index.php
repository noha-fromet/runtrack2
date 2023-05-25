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
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$new_str = substr($str, 1) . substr($str, 0, 1);
echo $new_str;
?>
</body>
</html>