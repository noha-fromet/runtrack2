<!DOCTYPE html>
<html>
<head>
    <title>Job 03</title>
</head>
<body>
<?php
session_start();
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}
if (isset($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}
echo "Liste des prénoms: <br>";
foreach ($_SESSION['prenoms'] as $prenom) {
    echo $prenom . "<br>";
}
?>
<form method="post">
    <input type="text" name="prenom">
    <input type="submit" value="Ajouter">
</form>
<form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>

</body>
</html>
