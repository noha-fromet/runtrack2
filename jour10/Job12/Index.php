<!DOCTYPE html>
<html>
<head>
    <title>Job 06</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');
    $query = $pdo->query('SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN "1998-01-01" AND "2018-12-31"');
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo '<table>';
    echo '<thead><tr><th>prenom</th><th>nom</th><th>naissance</th></tr></thead>';
    echo '<tbody>';
    foreach ($result as $row) {
        echo '<tr><td>' . $row['prenom'] . '</td><td>' . $row['nom'] . '</td><td>' . $row['naissance'] . '</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
?>

</body>
</html>
