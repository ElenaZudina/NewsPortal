<?php
class Category {

    public static function getAllCategory() {
        $query = "SELECT * FROM category" ;
        $db = new Datebase();
        $arr = $db->getAll($query);
        return $arr;
    }
}