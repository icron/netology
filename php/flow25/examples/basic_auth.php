<?php
define('USER_LOGIN', 'admin');
define('USER_PASS', 'pass');

if (
    empty($_SERVER['PHP_AUTH_USER']) || empty($_SERVER['PHP_AUTH_PW']) ||

    $_SERVER['PHP_AUTH_USER'] != USER_LOGIN ||

    $_SERVER['PHP_AUTH_PW'] != USER_PASS
) {
    header('WWW-Authenticate: Basic realm="myRealm"');
    die;
}

echo 'Добро пожаловать, админ!';
