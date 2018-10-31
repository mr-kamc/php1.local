<?php

require __DIR__ . '/autoload.php';
/*
$news = \App\Models\Article::findLast(3);
include __DIR__ . '/templates/news/index.php';
*/

$article = new \App\Models\Article();
$article->title = 'Название новости';
$article->content = 'Текст новости';
$article->insert();


/*
$config = new \App\Config();
var_dump($config->data['db']['host']);
*/