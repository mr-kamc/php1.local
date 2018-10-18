<?php

namespace App\Models;


use App\Db;
use App\Model;

class Article extends Model
{
    public const TABLE = 'news';

    public $id;
    public $title;
    public $content;

    public function findById($id)
    {
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE id=:id';
        $data = [':id' => $id];
        $db = new Db();
        $res = $db->query($sql, self::class, $data);
        return $res;
    }


}