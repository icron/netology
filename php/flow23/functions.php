<?php
session_start();
/**
 * Реализует механизм авторизации
 * @param $login
 * @param $password
 */
function login($login, $password) {
    $user = getUser($login);
    if ($user && $user['password'] === $password) {
        $_SESSION['user'] = $user;
        return true;
    }
    return false;
}

/**
 * Получение пользователя по его логину
 * @param $login
 * @return mixed|null
 */
function getUser($login) {
    $users = getUsers();
    foreach ($users as $user) {
        if ($login === $user['login']) {
            return $user;
        }
    }
    return null;
}

/**
 * Получение всех пользователей из бд
 * @return array|mixed
 */
function getUsers()
{
    $userData = file_get_contents(__DIR__ . '/data/users.json');
    if (!$userData) {
        return [];
    }
    $users = json_decode($userData, true);
    if (!$users) {
        return [];
    }

    return $users;
}

/**
 * Является ли пользователь авторизованным
 * @return bool
 */
function isAuthorized()
{
    return !empty($_SESSION['user']);
}

function isAdmin()
{
    return isAuthorized() && $_SESSION['user']['is_admin'];
}

function redirect($page) {
    header("Location: $page.php");
    die;
}