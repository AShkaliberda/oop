<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 18.11.2017
 * Time: 12:18
 */

class Controller_Test extends Controller
{

    function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('test_view.php', 'template_view.php', $data);
    }
}