<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 03.11.2017
 * Time: 17:13
 */
ini_set('display_errors', 1);
session_start();

spl_autoload_register(function($class){
    if(file_exists("classes/".$class.".php")){
        include_once "classes/" .$class. ".php";
    }
});

Route::start();

