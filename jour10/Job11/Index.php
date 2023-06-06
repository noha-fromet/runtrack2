<!DOCTYPE html>
<html>
<head>
    <title>Job 05</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');
    $query = $pdo->query('SELECT AVG(capacite) AS capacite_moyenne FROM salles');
    $result = $query->fetch(PDO::FETCH_ASSOC);
    echo '<table>';
    echo '<thead><tr><th>capacite_moyenne</th></tr></thead>';
    echo '<tbody><tr><td>' . $result['capacite_moyenne'] . '</td></tr></tbody>';
    echo '</table>';
?>

</body>
</html>
