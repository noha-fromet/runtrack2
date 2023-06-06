<!DOCTYPE html>
<html>
<head>
    <title>Job 02</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');
    $query = $pdo->query('SELECT nom, capacite FROM salles');
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo '<table>';
    echo '<thead><tr><th>nom</th><th>capacite</th></tr></thead>';
    echo '<tbody>';
    foreach ($result as $row) {
        echo '<tr><td>' . $row['nom'] . '</td><td>' . $row['capacite'] . '</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
?>

</body>
</html>
