<?php

require __DIR__ . '/../autoload.php';

$db = new \App\Db();

$data = [':title' => 'Тестовая новость', ':content' => 'Текст тестовой новости'];
$sql = 'INSERT INTO news (title, content) VALUES (:title, :content)';

var_dump($db->execute($sql, $data));

$data = [':title' => 'Тестовая новость'];
$sql = 'DELETE FROM news WHERE title=:title';

var_dump($db->execute($sql, $data));