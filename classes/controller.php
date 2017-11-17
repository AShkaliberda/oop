<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 17.11.2017
 * Time: 16:32
 */

class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
    }
}