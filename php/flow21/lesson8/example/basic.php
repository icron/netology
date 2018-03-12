<?php

if (!isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])
    || $_SERVER['PHP_AUTH_USER'] != 'admin'
    || $_SERVER['PHP_AUTH_PW'] != 'pass'

) {
    header('WWW-Authenticate: Basic realm="myRealm"');
    die;
}

echo 'Добро пожаловать, admin';


