<?php

namespace App;


class Config
{
    protected static $instance;
    public $data;

    protected function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }

    public static function getInstance()
    {
        if (null === self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

}

/*
 * $config = new \App\Config;
 * echo $config->data['db']['host'];
 */