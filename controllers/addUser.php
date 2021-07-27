<?php
require 'core/User.php';

$user = new User($_POST['name']);
$values = ['name' => $user->name];

$app['database']->insert('users',$values);
$users = $app['database']->selectAll('users');

header('Location: /');