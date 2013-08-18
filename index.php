<?php
require('bootstrap.php');

$app = new Term();

$app->route(array(
    '/' => 'my/index',
    '/login(/:next)' => 'auth/login',
    '/logout' => 'auth/logout',
    '/users' => 'user/browse',
    '/user/:user_id' => 'user/view',
    '/project/:project/members' => 'project/members',
));

$app->run();
