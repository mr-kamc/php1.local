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

}