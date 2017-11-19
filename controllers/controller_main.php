<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 17.11.2017
 * Time: 17:13
 */
class Controller_Main extends Controller
{
    function __construct()
    {
        $this->model = new Model_Test();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->getAllTests();
        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}