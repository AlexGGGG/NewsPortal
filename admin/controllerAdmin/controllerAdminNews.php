<?php
class controllerAdminNews{
    
    //list news
    public static function NewsList(){

        $arr=modelAdminNews::getNewsList();
            include_once 'viewAdmin/newsList.php';
    }
}//class
?>