<!DOCTYPE html>
<html>
<head>
    <title>Job 02</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');
    $query = $pdo->query('SELECT SUM(capacite) AS capacite FROM salles');
    $result = $query->fetch(PDO::FETCH_ASSOC);
    echo '<table>';
    echo '<thead><tr><th>capacite</th></tr></thead>';
    echo '<tbody><tr><td>' . $result['capacite'] . '</td></tr></tbody>';
    echo '</table>';
?>

</body>
</html>
