<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 17.11.2017
 * Time: 17:13
 */
class Controller_Main extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}