<!DOCTYPE html>
<html>
<head>
    <title>Job 05</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="Connexion">
    </form>

    <?php
        if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo') {
            echo "C’est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    ?>
</body>
</html>
