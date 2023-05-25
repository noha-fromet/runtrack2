<!DOCTYPE html>
<html>
<head>
    <title>Job 01</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="field1">
        <input type="text" name="field2">
        <input type="submit" value="Envoyer">
    </form>

    <?php
        $count = count($_GET);
        echo "Le nombre d’arguments GET envoyé est : $count";
    ?>
</body>
</html>
