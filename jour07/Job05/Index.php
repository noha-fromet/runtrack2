<!DOCTYPE html>
<html>
<head>
    <title>Job 05</title>
</head>
<body>
<?php
session_start();
if (isset($_POST['reset']) || isset($_POST['newgame'])) {
    $_SESSION['grid'] = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']];
    $_SESSION['player'] = 'X';
}
if (!isset($_SESSION['grid']) || !isset($_SESSION['player'])) {
    $_SESSION['grid'] = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']];
    $_SESSION['player'] = 'X';
}
function checkWin($grid) {
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] != '-' && $grid[$i][0] == $grid[$i][1] && $grid[$i][1] == $grid[$i][2]) return true;
        if ($grid[0][$i] != '-' && $grid[0][$i] == $grid[1][$i] && $grid[1][$i] == $grid[2][$i]) return true;
    }
    if ($grid[0][0] != '-' && $grid[0][0] == $grid[1][1] && $grid[1][1] == $grid[2][2]) return true;
    if ($grid[2][0] != '-' && $grid[2][0] == $grid[1][1] && $grid[1][1] == $grid[0][2]) return true;
    return false;
}
function checkTie($grid) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($grid[$i][$j] == '-') return false;
        }
    }
    return true;
}
if (isset($_POST['cell'])) {
    $cell = $_POST['cell'];
    $i = intval($cell[0]);
    $j = intval($cell[1]);
    if ($_SESSION['grid'][$i][$j] == '-') {
        $_SESSION['grid'][$i][$j] = $_SESSION['player'];
        if (checkWin($_SESSION['grid'])) {
            echo $_SESSION['player'] . " a gagné !";
            $_SESSION['grid'] = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']];
            $_SESSION['player'] = 'X';
        } else if (checkTie($_SESSION['grid'])) {
            echo "Match nul !";
            $_SESSION['grid'] = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']];
            $_SESSION['player'] = 'X';
        } else {
            $_SESSION['player'] = $_SESSION['player'] == 'X' ? 'O' : 'X';
        }
    }
}
?>
<table>
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>";
            if ($_SESSION['grid'][$i][$j] == '-') {
                echo "<form method='post'>";
                echo "<input type='hidden' name='cell' value='" . $i . $j . "'>";
                echo "<input type='submit' value='-'>";
                echo "</form>";
            } else {
                echo $_SESSION['grid'][$i][$j];
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<form method="post">
    <input type="submit" name="newgame" value="Réinitialiser la partie">
</form>

</body>
</html>
