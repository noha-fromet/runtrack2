<!DOCTYPE html>
<html>
<head>
    <title>Job 03</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');
    $query = $pdo->query('SELECT * FROM salles ORDER BY capacite DESC');
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo '<table>';
    echo '<thead><tr>';
    foreach ($result[0] as $key => $value) {
        echo '<th>' . $key . '</th>';
    }
    echo '</tr></thead>';
    echo '<tbody>';
    foreach ($result as $row) {
        echo '<tr>';
        foreach ($row as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
?>

</body>
</html>
