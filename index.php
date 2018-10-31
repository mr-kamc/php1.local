<?php

require __DIR__ . '/autoload.php';

/*
$news = \App\Models\Article::findLast(3);
include __DIR__ . '/templates/news/index.php';
*/


$article = \App\Models\Article::findById(9)[0];
$article->title = 'изменение в названии';
$article->content = 'изменение в тексте';
$article->update();


/*
$config = new \App\Config();
var_dump($config->data['db']['host']);
*/