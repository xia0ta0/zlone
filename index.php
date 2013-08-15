<?php
require('bootstrap.php');

$app = new Term();

$app->route(array(
    '/' => 'my/index',
    '/login(/:next)' => 'auth/login',

));

$app->run();
