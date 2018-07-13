<?php
require_once __DIR__ . '/functions.php';
if (isGuest()) {
    header('Location: login.php');
    die;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>
Привет, <?= $_SESSION['user']['username'] ?><br/>
<ul>
    <li><a href="logout.php">Выход</a></li>
    <li><a href="only_admins.php">Только для админов</a></li>
</ul>

</body>
</html>