<?php

$router->get('','controllers/index.php');
$router->get('about','controllers/about.php');
$router->post('names','controllers/names.php');
$router->post('addTask','controllers/addTask.php');
$router->post('addUser','controllers/addUser.php');
