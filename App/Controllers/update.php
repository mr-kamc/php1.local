<?php

require __DIR__ . '/../../autoload.php';

if ((isset($_POST['title'])) && (isset($_POST['content']))){

$title = $_POST['title'];
$content = $_POST['content'];

$article = new \App\Models\Article();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $article->id = $id;
}

$article->title = $title;
$article->content = $content;
$article->save();
}

header('Location: /App/Controllers/admin.php');
