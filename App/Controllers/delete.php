<?php

require __DIR__ . '/../../autoload.php';

$id = $_GET['id'];

if ((isset($id)) && ($id !== '')) {
    $article = \App\Models\Article::findById($id);
    $article->delete();
}

header('Location: /App/Controllers/admin.php');

