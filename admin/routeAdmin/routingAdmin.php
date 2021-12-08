<?php

//вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == "" OR $path == "index") {
    //Главная страница входа
    $response = controllerAdmin::formLoginSite();
} elseIf ($path == 'login') {
    //форма входа
    $response = controllerAdmin::loginAction();
} elseIf ($path == 'logout') {
    //Выход
    $response = controllerAdmin::logoutAction();
} else {
    // страница не существует
    $response = controllerAdmin::error404();
}