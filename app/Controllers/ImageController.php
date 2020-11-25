<?php

namespace App\Controllers;

use App\Services\ImageService;

class ImageController
{
    private static $accepts = [ 'png', 'jpg' ];

    private static $uploadDirectory = __DIR__ . '/../../storage/app/images/';

    public static function store()
    {
        if (array_key_exists('upload', $_FILES)) {
            $file = $_FILES['upload'];
            $filename = $_SESSION['user']->id . '_' . time() . '_' . hash('md5', $file['name']);

            echo ImageService::create($file, self::$accepts, self::$uploadDirectory . $filename);
            return;
        }
        return http_response_code(400);
    }

    public static function show($path)
    {
        if (preg_match('/\d_\d{10}_[0-9a-z]{32}/', $path)) {
            echo ImageService::read(self::$uploadDirectory . basename($path));
            return;
        }
        return http_response_code(404);
    }
}