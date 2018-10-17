<?php

function my_autoloader($class){
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}

spl_autoload_register('my_autoloader');
