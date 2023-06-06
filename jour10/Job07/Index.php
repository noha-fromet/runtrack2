<!DOCTYPE html>
<html>
<head>
    <title>Job 07</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');
    $query = $pdo->query('SELECT SUM(superficie) AS superficie FROM etage');
    $result = $query->fetch(PDO::FETCH_ASSOC);
    echo '<table>';
    echo '<thead><tr><th>superficie</th></tr></thead>';
    echo '<tbody><tr><td>' . $result['superficie'] . '</td></tr></tbody>';
    echo '</table>';
?>

</body>
</html>
