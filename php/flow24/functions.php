<?php
session_start();

function login($login, $password)
{
    $user = getUser($login);
    if ($user && $user['password'] == $password) {
        $_SESSION['user'] = $user;
        return true;
    }
    return false;
}


function getUser($login)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['login'] == $login) {
            return $user;
        }
    }
    return null;
}

function getUsers()
{
    $usersData = file_get_contents(__DIR__ . '/data/users.json');
    if (!$usersData) {
        return [];
    }
    $users = json_decode($usersData, true);
    if (!$users) {
        return [];
    }
    return $users;
}

function isAuthorized()
{
    return !empty($_SESSION['user']);
}

function isAdmin()
{
    return $_SESSION['user']['is_admin'];
}

function redirect($page)
{
    header("Location: $page.php");
    die;
}