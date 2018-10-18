<?php

require __DIR__ . '/autoload.php';


$art = new \App\Models\Article();
$res = $art->findById(1);
var_dump($res);


/*
$data = \App\Models\Article::findAll();

var_dump($data);
*/