<?php
if (empty($_SERVER['PHP_AUTH_PW'])  || empty($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="myRealm"');
    die;
}

if ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'pass') {
    echo 'Добро пожаловать, admin';
} else {
    echo 'Неверно введены логин и пароль';
}

