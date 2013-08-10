<?php
require('bootstrap.php');

$app = new Term();

$app->route(array(
    '/' => 'my/index',
    '/login' => 'auth/login'
    '/reg' => 'auth/reg'
));

$app->run();
