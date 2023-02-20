<?php
session_start();
include "Config.php";

spl_autoload_register(function ($class) {
    foreach(Config::$modules as $module){
        foreach(Config::$packages as $package){
            if(file_exists("{$module}/{$package}/{$class}.php")){
                include_once "{$module}/{$package}/{$class}.php";
                return true;
            }
        }
    }
});

$c= isset($_GET['c']) ? $_GET['c'] : "CtrlForm";
$ctrl = new $c;

$m = isset($_GET['m']) ? $_GET['m'] : "formulaire";

$a = isset($_GET['a']) ? $_GET['a'] : false;
if($a){
    $ctrl->$m($a);
}
else{
    $ctrl->$m();
}
