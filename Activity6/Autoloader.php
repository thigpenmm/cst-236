<?php

function my_autoloader($class){
    require $class . '.php';
}
spl_autoload_register(function($class){
    require $class . '.php';
});