<?php

use Eclair\Routing\Route;

use App\Middlewares\RequireMiddleWare;
use App\Middlewares\CsrfTokenMiddleware;
use App\Middlewares\AuthMiddleware;

Route::add('get', '/', '\App\Controllers\IndexController::index');

Route::add('get', '/auth/login', '\App\Controllers\AuthController::ShowLoginForm');
Route::add('post', '/auth', '\App\Controllers\AuthController::login', [ RequireMiddleWare::class, CsrfTokenMiddleware::class ]);
Route::add('post', '/auth/logout', '\App\Controllers\AuthController::logout');

Route::add('get', '/users/register', '\App\Controllers\UserController::create');
Route::add('post', '/users', '\App\Controllers\UserController::store', [ RequireMiddleWare::class, CsrfTokenMiddleware::class ]);