<?php
require('bootstrap.php');

$app = new Term();

$app->route(array(
    '/' => 'index/index',
    '/login' => 'auth/login'
));

$app->run();
