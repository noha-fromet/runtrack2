<!DOCTYPE html>
<html>
<head>
    <title>Job 04</title>
</head>
<body>
<?php
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
}
if (isset($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + 3600);
}
if (isset($_COOKIE['prenom'])) {
    echo "Bonjour " . $_COOKIE['prenom'] . " !";
?>
<form method="post">
    <input type="submit" name="deco" value="Déconnexion">
</form>
<?php
} else {
?>
<form method="post">
    <input type="text" name="prenom">
    <input type="submit" value="Connexion">
</form>
<?php
}
?>


</body>
</html>
