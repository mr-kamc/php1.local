<?php

require __DIR__ . '/autoload.php';

$id = $_GET['id'];

$article = \App\Models\Article::findById($id)[0];

include __DIR__ . '/templates/news/article.php';
