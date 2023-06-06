<!DOCTYPE html>
<html>
<head>
    <title>Job 06</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');
    $query = $pdo->query('SELECT COUNT(*) AS nb_etudiants FROM etudiants');
    $result = $query->fetch(PDO::FETCH_ASSOC);
    echo '<table>';
    echo '<thead><tr><th>nb_etudiants</th></tr></thead>';
    echo '<tbody><tr><td>' . $result['nb_etudiants'] . '</td></tr></tbody>';
    echo '</table>';
?>

</body>
</html>
