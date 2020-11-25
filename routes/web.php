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

Route::add('get', '/posts/write', '\App\Controllers\PostController::create', [ AuthMiddleware::class ]);
Route::add('post', '/posts', '\App\Controllers\PostController::store', [ AuthMiddleware::class, RequireMiddleWare::class, CsrfTokenMiddleware::class ]);
Route::add('get', '/posts/{id}', '\App\Controllers\PostController::show');
Route::add('get', '/posts/{id}/edit', '\App\Controllers\PostController::edit', [ AuthMiddleware::class ]);
Route::add('patch', '/posts/{id}', '\App\Controllers\PostController::update', [ AuthMiddleware::class, RequireMiddleWare::class, CsrfTokenMiddleware::class ]);
Route::add('delete', '/posts/{id}', '\App\Controllers\PostController::destroy', [ AuthMiddleware::class, RequireMiddleWare::class, CsrfTokenMiddleware::class ]);