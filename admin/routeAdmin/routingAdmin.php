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
}

    //-------------------------------listNews
elseif($path=='newsAdmin') {
    $response=controllerAdminNews::NewsList();
}

//-----------------add news
    elseif($path=='newsAdd') {
        $response=controllerAdminNews::newsAddForm();

}
elseif($path == 'newsAddResult') {
    $response = controllerAdminNews::newsAddResult();
}

else {
    // страница не существует
    $response = controllerAdmin::error404();
}