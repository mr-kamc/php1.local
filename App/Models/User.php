<?php

namespace App\Models;


use App\Model;

class User extends Model
{
    public const TABLE = 'users';
    public $email;
    public $name;

    public function getModelName()
    {
        // TODO: Implement getModelName() method.
    }
}