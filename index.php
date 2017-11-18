<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 03.11.2017
 * Time: 17:13
 */
session_start();
require_once('config.php');

spl_autoload_register(function($model){
    if(file_exists("classes/".$model.".php")){
        include_once "classes/".$model.".php";
    }
});


//$obj = new Test();
//$tests = $obj->getAllTests($db);
//
//require_once('views/header.php');
//require_once('views/main.php');
//require_once('views/footer.php');
