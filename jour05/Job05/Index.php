<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec style</title>
</head>
<body>
<?php
if(isset($_POST['style'])) {
    $style = $_POST['style'];
    echo "<link rel='stylesheet' type='text/css' href='$style.css'>";
}
?>
    <form method="post">
        <label for="style">Choisissez un style:</label>
        <select name="style" id="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <input type="submit" value="Valider">
    </form>
</body>
</html>
