<!DOCTYPE html>
<html>
<head>
    <title>Job 07</title>
</head>
<body>
    <form method="GET">
        <label for="largeur">Largeur:</label>
        <input type="text" name="largeur" id="largeur">
        <label for="hauteur">Hauteur:</label>
        <input type="text" name="hauteur" id="hauteur">
        <input type="submit" value="Envoyer">
    </form>

    <?php
        $largeur = $_GET['largeur'];
        $hauteur = $_GET['hauteur'];
        
        for ($i = 0; $i < $largeur / 2; $i++) {
            for ($j = 0; $j < $largeur; $j++) {
                if ($j == $largeur / 2 - $i) {
                    echo "/";
                } else if ($j == $largeur / 2 + $i) {
                    echo "\\";
                } else if ($i == $largeur / 2 - 1) {
                    echo "_";
                } else {
                    echo " ";
                }
            }
            echo "<br>";
        }
        
        for ($i = 0; $i < $hauteur - 2; $i++) {
            for ($j = 0; $j < $largeur; $j++) {
                if ($j == 0 || $j == $largeur - 1) {
                    echo "|";
                } else if ($i == $hauteur - 3) {
                    echo "_";
                } else {
                    echo " ";
                }
            }
            echo "<br>";
        }
    ?>
</body>
</html>
