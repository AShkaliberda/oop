<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 17.11.2017
 * Time: 16:31
 */

class Model
{
    protected $_db = null;

    public function __construct()
    {
        require_once('config.php');
        $this->_db = new PDO('mysql:host='. HOST .';dbname='. DBNAME, USER, PASSWORD);

    }

    public function get_data()
    {
    }


}