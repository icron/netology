<?php
if (empty($_COOKIE['cookie_1'])) {
    setcookie('cookie_1', 'value_1', time() + 3);
} else {
    echo $_COOKIE['cookie_1'];
}
