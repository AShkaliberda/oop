<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 19.11.2017
 * Time: 18:58
 */

class Model_Test extends Model
{

    public function getAllTests()
    {
        $sql = "SELECT `id`, `name`, `description` FROM tests";
        $res = $this->_db->query($sql);

        if (!$res) {
            return false;
        }

        $posts = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $row;
        }
        return $posts;
    }
}