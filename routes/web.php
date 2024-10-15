<?php
       
$router->get('login', 'App\Controllers\AuthLogin@index');
$router->get('register', 'App\Controllers\registerController@index');

$router->post('login', 'App\Controllers\AuthLogin@auth');
$router->post('logout', 'App\Controllers\AuthLogin@logout');

$router->post('register', 'App\Controllers\registerController@store');

$router->get('panel', 'App\Controllers\PanelController@index');