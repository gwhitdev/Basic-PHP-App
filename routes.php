<?php

$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
$router->post('addTask','PagesController@addTask');

$router->get('users','UsersController@index');
$router->post('users/store','UsersController@store');