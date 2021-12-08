<?php

class modelAdmin {

    public static function userAuth() {

        if (isset($_SESSION['userId'])) {
            $logIn = true;
        } else {
            $logIn = false;
            //form
            if (isset($_POST['btnLogin'])) {
                if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != "" && !empty($_POST['password'])) {

                    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                    $password = $_POST['password']; //123456   из формы
//sql query
                    $sql = 'SELECT * FROM `users` WHERE `email`="' . $email . '"';
                    $db = new Database();
                    $item = $db->getOne($sql);
                    if ($item) {
                        //сравнить пароль

                        if (password_verify($password, $item['password'])) {

                            //переменные сессии
                            $_SESSION['userId'] = $item['id'];
                            $_SESSION['username'] = $item['username'];
                            $_SESSION['status'] = $item['status'];
                            $_SESSION['sessionID'] = session_id();
                            $_SESSION['email'] = $item['email'];
                            $logIn = true;
                        }//controll password
                    }
                }//$_POST['email']
            }//btnlogin
        }
        return $logIn;
    }

//auth
    //-----------------------logout

    public static function userLogout() {
        unset($_SESSION['sessionId']);
        unset($_SESSION['userId']);
        unset($_SESSION['username']);
        unset($_SESSION['status']);
        session_destroy();
        return;
    }

}

//class