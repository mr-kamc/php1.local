<?php

namespace App;


abstract class Model
{

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        $res = $db->query($sql, static::class);
        return $res;
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $data = [':id' => $id];
        $res = $db->query($sql, static::class, $data);
        return $res ?: false;
    }

    public function findLast($qt)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $qt;
        $data = [':n' => $qt];
        $res = $db->query($sql, static::class, $data);
        return $res;
    }

}