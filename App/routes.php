<?php

$routes = [
    '' => ['controller' => 'home', 'method' => 'index'],
    'home' => ['controller' => 'home', 'method' => 'index'],
    'login' => ['controller' => 'login', 'method' => 'index'],
    'signup' => ['controller' => 'signup', 'method' => 'index'],
    'register' => ['controller' => 'signup', 'method' => 'register'],
    'login/authenticate' => ['controller' => 'login', 'method' => 'authenticate'],
    'dashboard' => ['controller' => 'dashboard', 'method' => 'index'], 
    'logout' => ['controller' => 'login', 'method' => 'logout'],
];

?>
