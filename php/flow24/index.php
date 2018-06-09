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
    <title>Админка</title>
</head>
<body>
    <div>
        Добро пожаловать <b><?= $_SESSION['user']['username'] ?></b>
    </div>
    <div>
        <ul>
            <?php if (isAdmin()): ?>
                <li><a href="users.php">Список пользователей</a></li>
            <?php endif; ?>
            <li><a href="logout.php">Выход</a></li>
        </ul>
    </div>
</body>
</html>