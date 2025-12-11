<?php
class controllerAdminNews {
    //list News
    public static function NewsList() {
        $arr=modelAdminNews::getNewsList();
        include_once 'viewAdmin/newsList.php';
    }
    //--------add
    public static function newsAddForm() {
        $arr = modelAdminCategory::getCategoryList();
        include_once('viewsAdmin/newsAddForm.php');
    }

    public static function newsAddResult() {
        $test = modelAdminNews::getNewsAdd();
        include_once('viewsAdmin/newsAddForm.php');
    }
}
