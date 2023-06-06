<!DOCTYPE html>
<html>
<head>
    <title>Job 05</title>
</head>
<body>
    <?php
    function occurrences($str, $char) {
        return substr_count($str, $char);
    }
    echo occurrences("Bonjour", "o");

    ?>
</body>
</html>
