<?php

//setcookie('cookie_1', 'value_2', time() - 1);
if (!empty($_COOKIE['cookie_1'])) {
    echo $_COOKIE['cookie_1'];
} else {
    setcookie('cookie_1', 'value_2');
}


