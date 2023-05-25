<!DOCTYPE html>
<html>
<head>
    <title>Job 03</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="field1">
        <input type="text" name="field2">
        <input type="submit" value="Envoyer">
    </form>

    <?php
        $count = count($_POST);
        echo "Le nombre d’arguments POST envoyé est : $count";
    ?>
</body>
</html>
