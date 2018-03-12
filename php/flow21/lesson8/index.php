<?php
require_once 'functions.php';

if(!isAuthorizedUser()) {
    redirect('login');
}
?>
<ul>
    <li>Привет, <?= $_SESSION['user']['username']; ?></li>
    <li><a href="logout.php">Выход</a></li>
    <li></li>
</ul>