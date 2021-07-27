<?php
$db = App::get('database');

$tasks = $db->selectAll('todos');
$users = $db->selectAll('users');
require 'views/index.view.php';