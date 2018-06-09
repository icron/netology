<?php
require_once 'functions.php';

if (!isAuthorized()) {
    redirect('login');
}

if (!isAdmin()) {
    http_response_code(403);
    echo 'Вам доступ запрещен';
    die;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список пользователей</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div>
        <a href="index.php" class="btn btn-default">Назад</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Имя</th>
            <th>Логин</th>
            <th>Является админом</th>
        </tr>
        <?php foreach (getUsers() as $user): ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['login'] ?></td>
            <td><?= $user['is_admin'] ? 'Да' : 'Нет' ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>