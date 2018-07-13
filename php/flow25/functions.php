<?php
session_start();

// string - это тип аргумента только в 7 версии PHP. Т.е. принимает только строки.
function login(string $login, string  $password): bool
{
    $user = getUser($login);
    if ($user && $user['password'] == $password) {
        $_SESSION['user'] = $user;
        return true;
    }
    return false;
}

function isGuest() {
    return empty($_SESSION);
}

function getUsers(): array // :array - это в 7 версии php означает, что возвращается только массив
{
    $fileData = file_get_contents(__DIR__ . '/data/users.json');
    $users = json_decode($fileData, true);
    if (!$users) {
        return [];
    }
    return $users;
}

// ?array - только в PHP 7 . Возвращается либо массив либо null.
function getUser($login): ?array {
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['login'] == $login) {
            return $user;
        }
    }
    return null;
}

function isAdmin()
{
    return !empty($_SESSION['user']) && !empty($_SESSION['user']['is_admin']);
}