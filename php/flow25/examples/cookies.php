<?php

if (!empty($_GET['font_size'])) {
    $fontSize = $_GET['font_size'];
    setcookie('font_size', $fontSize, time());
}

$fontSize = 16;
if (!empty($_COOKIE['font_size'])) {
    $fontSize = $_COOKIE['font_size'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Демонстрация кук</title>
</head>
<body>
    <p style="font-size: <?= $fontSize ?>px;">Пример кук</p>
</body>
</html>


