<?php

# M = Model, V - View C - Controller

## posts, users --> Post, User
## Layout, read, index, write.php
## Controller --> PostController (Class), AuthController

require_once '../vendor/autoload.php';

$app = require_once '../bootstrap/app.php';

$app->boot();