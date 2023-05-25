<!DOCTYPE html>
<html>
<head>
    <title>Job 02</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="prenom">
        <input type="text" name="nom">
        <input type="submit" value="Envoyer">
    </form>

    <?php
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        foreach ($_GET as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
