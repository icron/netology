<?php
require_once 'functions.php';

if (!isAdmin()) {
    http_response_code(403);
    echo 'Вам доступ запрещен!';
    die;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список пользователей</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Имя</th>
            <th>Логин</th>
            <th>Админ</th>
        </tr>
    </thead>
    <tbody>
    <? foreach (getUsers() as $user): ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['login'] ?></td>
            <td><?= $user['is_admin'] ? 'Да' : 'Нет' ?></td>
        </tr>
    <? endforeach; ?>
    </tbody>
</table>
</body>
</html>