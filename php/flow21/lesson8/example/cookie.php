<?php

if(empty($_COOKIE['mycookie'])) {
    setcookie('mycookie', 'value1', time() - 1);
} else {
    echo $_COOKIE['mycookie'];
}



