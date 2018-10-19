<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\Article::findLast(3);
include __DIR__ . '/templates/news/index.php';


/*
$data = \App\Models\Article::findAll();

var_dump($data);
*/