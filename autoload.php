<?php

function my_autoloader($class){
    //include 'App/' . $class . '.php';
    $file = __DIR__ . '/' . str_replace('\\', '/', $class);
    echo $file;
}

spl_autoload_register('my_autoloader');