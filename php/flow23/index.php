<?php
require_once 'functions.php';
if (!isAuthorized()) {
    redirect('login');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
Добро пожаловать, <?= $_SESSION['user']['username']; ?>
<ul>
    <? if ($_SESSION['user']['is_admin']): ?>
        <li><a href="users.php">Список пользователей</a></li>
    <? endif; ?>
    <li><a href="logout.php">Выход</a> </li>
</ul>
</body>
</html>