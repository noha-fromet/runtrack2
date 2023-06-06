<!DOCTYPE html>
<html>
<head>
    <title>Job 07</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');
    $query = $pdo->query('SELECT salles.nom AS salle, etage.nom AS etage FROM salles JOIN etage ON salles.id_etage = etage.id');
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo '<table>';
    echo '<thead><tr><th>salle</th><th>etage</th></tr></thead>';
    echo '<tbody>';
    foreach ($result as $row) {
        echo '<tr><td>' . $row['salle'] . '</td><td>' . $row['etage'] . '</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
?>

</body>
</html>
