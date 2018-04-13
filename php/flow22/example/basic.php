<?php
define('USER', 'admin');
define('PASS', 'pass');

if(!empty($_SERVER['PHP_AUTH_USER']) && !empty($_SERVER['PHP_AUTH_PW'])) {
    if (USER == $_SERVER['PHP_AUTH_USER'] && PASS == $_SERVER['PHP_AUTH_PW']) {
        echo 'Hello ' . USER;
        die;
    }
}
header('WWW-Authenticate: Basic realm="myRealm"');


