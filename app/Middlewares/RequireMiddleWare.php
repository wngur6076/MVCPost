<?php

namespace App\Middlewares;

use Eclair\Routing\Middleware;

class RequireMiddleWare extends Middleware
{
    public static function process()
    {
        if (count($_REQUEST) === count(array_filter($_REQUEST))) {
            return true;
        }
        return header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}