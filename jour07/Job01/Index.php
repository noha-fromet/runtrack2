<!DOCTYPE html>
<html>
<head>
    <title>Job 01</title>
</head>
<body>

<?php
session_start();
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}
$_SESSION['nbvisites']++;
echo "Nombre de visites: " . $_SESSION['nbvisites'];
?>
<form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>

</body>
</html>
