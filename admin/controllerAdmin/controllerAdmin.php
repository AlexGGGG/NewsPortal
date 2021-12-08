<?php

class controllerAdmin {

    public static function formLoginSite() {
        include_once "viewAdmin/formLogin.php";
    }

    //форма авторизации админа
    public static function loginAction() {
        $logIn = false;
        $logIn = modelAdmin::userAuth();
        if ($logIn) {
            include_once "viewAdmin/startAdmin.php";
        } else {
            $_SESSION['errorString'] = 'Неправильно e-mail или пароль';
            include_once "viewAdmin/formLogin.php";
        }
    }

    //выход из админ-панели
    public static function logoutAction() {
        modelAdmin::userLogout();
        //include_once "viewAdmin/formLogin.php";
        header('Location:./');
    }

    //error page
    public static function error404() {
        include_once("viewAdmin/error404.php");
    }

}

//class
?>