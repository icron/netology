<?php
require_once 'functions.php';

// Удаляем только один ключ из сессии.
//unset($_SESSION['user']);
// лучше так, потому что удаляем полностью данные сессии
session_destroy();
redirect('login');
