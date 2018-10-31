<?php

namespace App;


class Config
{
    public $data;

    public function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }

}

/*
 * $config = new \App\Config;
 * echo $config->data['db']['host'];
 */