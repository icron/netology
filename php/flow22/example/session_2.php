<?php
session_start();

if (!empty($_SESSION['is_admin'])) {
    echo 'Вы авторизованы';
} else {
    echo 'Вы гость';
}