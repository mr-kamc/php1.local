<?php

namespace App;


abstract class Model
{

    public $id;

    abstract public function getModelName();

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        $res = $db->query($sql, static::class);
        return $res;
    }

}