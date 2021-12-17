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
//--------------------------------edit news
elseif ($path=='newsEdit' && isset($_GET['id'])){
    $response=controllerAdminNews::newsEditForm($_GET['id']);
}
elseif ($path == 'newsEditResult' && isset($_GET['id'])) {
    $response=controllerAdminNews::newsEditResult($_GET['id']);
}
elseif($path=='newsDel' && isset($_GET['id'])){
        $response=controllerAdminNews::newsDeleteForm($_GET['id']);
    }
elseif($path=='newsDelResult' && isset($_GET['id'])){
        $response=controllerAdminNews::newsDeleteResult($_GET['id']);
    }
else {
    // страница не существует
    $response = controllerAdmin::error404();
}