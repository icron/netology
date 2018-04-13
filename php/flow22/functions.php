<?php
// Здесь будут вспомогательные функции
// Обработка файла пользователей
session_start();

/**
* Функция реализует мезанизм авторизации
* @return bool Успешно ли авторизовался
*/
function login($login, $password) {
	$user = getUser($login);
	if ($user && $user['password'] == $password) {
		$_SESSION['user'] = $user;
		return true;
	}
	return false;
}

function isAuthorized() {
	return !empty($_SESSION['user']);
}

function isAdmin() {
	return isAuthorized() && $_SESSION['user']['is_admin'];
}

function getAuthorizedUser() {
	return $_SESSION['user'];
}

/**
*  Получает список пользователей
*/
function getUsers() {
	$fileData = file_get_contents(__DIR__ . '/data/users.json');
	$users = json_decode($fileData, true);
	if (empty($users)) {
		return [];
	}
	return $users;
}

/**
*  Получает пользователя по его логину
*/
function getUser($login) {
	$users = getUsers();
	foreach ($users as $user) {
		if ($user['login'] == $login) {
			return $user;
		}
	}
	return null;
}

function logout() {
	session_destroy();
	header('Location: login.php');
}

function redirect($page) {
	header("Location: $page.php");
	die;
}
