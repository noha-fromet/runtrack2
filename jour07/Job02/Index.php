<!DOCTYPE html>
<html>
<head>
    <title>Job 02</title>
</head>
<body>
<?php
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
if (!isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', 0, time() + 3600);
}
setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, time() + 3600);
echo "Nombre de visites: " . $_COOKIE['nbvisites'];
?>
<form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>

</body>
</html>
