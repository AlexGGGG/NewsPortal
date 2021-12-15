<?php

class Comments {

    public static function insertComment($c, $id) {
        $query = "INSERT INTO `comments` ( `user_id`, `news_id`, `text`, `date`) VALUES ( '2', '" . $id . "', '" . $c . "', CURRENT_TIMESTAMP); ";
        $db = new Database();
        $q = $db->executeRun($query);
        return $q;
    }

    public static function getCommentByNewsID($id) {
        $query = "SELECT * FROM comments where news_id=" . (string) $id . " ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getCommentsCountByNewsID($id) {
        $query = "SELECT count(id) as 'count' FROM comments where news_id=" . (string) $id;
        $db = new Database();
        $c = $db->getOne($query);
        return $c;
    }

}