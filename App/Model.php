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

    public static function findLast($qt)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $qt;
        $data = [':n' => $qt];
        $res = $db->query($sql, static::class, $data);
        return $res;
    }

    public function insert()
    {
        $fields = get_object_vars($this);

        $cols = [];
        $data = [];

        foreach ($fields as $name=>$value){
            if ('id' == $name){
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(',', $cols) . ')
        VALUES 
        (' . implode(',', array_keys($data)) . ')';

        $db = new Db();
        $db->execute($sql, $data);

        $this->id = $db->getLastInsertId();
    }

}