<?php
// Для первичного захода эта функция
// устанавливает в браузере куку с идентификатором сессии
// А также считывает данные из файла сессий на сервере в массив $_SESSION, НО только
// в случае если идентификатор сессии который пришел в заголовках запроса валидный.
session_start();

if (!empty($_SESSION['array'])) {
    var_dump($_SESSION['array']);
} else {
    $_SESSION['array'] = [1, 2, 3];
}

// $_SESSION['is_admin'] = 1
//var_dump(session_save_path()); serialize() unserialize()