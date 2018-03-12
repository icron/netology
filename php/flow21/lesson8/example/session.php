<?php
session_start();

if (!empty($_GET['name'])) {
    $_SESSION['user_name'] = $_GET['name'];
}

if (!empty($_SESSION['user_name'])) {
    echo $_SESSION['user_name'];
}
echo '<br>';
echo session_save_path();