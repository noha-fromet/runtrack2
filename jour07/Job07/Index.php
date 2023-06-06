<!DOCTYPE html>
<html>
<head>
    <title>Job 07</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="str">
    <select name="fonction">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <input type="submit" value="Submit">
</form>
<?php
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    switch ($_POST['fonction']) {
        case 'gras':
            function gras($str) {
                $words = explode(" ", $str);
                foreach ($words as &$word) {
                    if (ctype_upper(substr($word, 0, 1))) {
                        $word = "<b>$word</b>";
                    }
                }
                return implode(" ", $words);
            }
            echo gras($str);
            break;
        case 'cesar':
            function cesar($str, $decalage = 2) {
                for ($i = 0; $i < strlen($str); ++$i) {
                    if (ctype_alpha($str[$i])) {
                        if (ctype_upper($str[$i])) {
                            $str[$i] = chr((ord($str[$i]) + $decalage - 65) % 26 + 65);
                        } else {
                            $str[$i] = chr((ord($str[$i]) + $decalage - 97) % 26 + 97);
                        }
                    }
                }
                return $str;
            }
            echo cesar($str);
            break;
        case 'plateforme':
            function plateforme($str) {
                return preg_replace('/me\b/', '_me', $str);
            }
            echo plateforme($str);
            break;
    }
}
?>
</body>
</html>
