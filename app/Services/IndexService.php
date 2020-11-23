<?php

namespace App\Services;

use Eclair\Database\Adaptor;

class IndexService
{
    public static function getPosts($page, $count)
    {
        return Adaptor::getAll('SELECT * FROM posts ORDER BY id DESC LIMIT ' . $count . ' OFFSET ' . $page * $count, [], \App\Post::class);
    }
}