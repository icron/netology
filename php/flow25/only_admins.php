<?php
require_once __DIR__ . '/functions.php';

if (isGuest()) {
    header('Location: login.php');
    die;
}

if (!isAdmin()) {
    //header('Location: login.php');
    http_response_code(403);
    echo 'Вам доступ запрещен!';
    die;
}
?>

<p>Только админ может видеть эту надпись!</p>
