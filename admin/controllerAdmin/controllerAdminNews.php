<?php
class controllerAdminNews{

    
    //list news
    public static function NewsList(){

        $arr=modelAdminNews::getNewsList();
            include_once 'viewAdmin/newsList.php';
    }
//------------------------------------add

public static function newsAddform()
{
    $arr = modelAdminCategory::getCategoryList();
    include_once('viewAdmin/newsAddForm.php');
}   
public static function newsAddResult()
{
    $test = modelAdminNews::getNewsAdd();
    include_once('viewAdmin/newsAddForm.php');
}

}