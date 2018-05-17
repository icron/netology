<?php




setcookie('my_cookie_2', 'font-size=12');

if (empty($_COOKIE['my_cookie_1'])) {
    setcookie('my_cookie_1', 'font-size=10');
} else {
    $value = $_COOKIE['my_cookie_1'];
    echo $value;
}
