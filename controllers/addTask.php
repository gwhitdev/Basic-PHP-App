<?php
require 'core/Task.php';

$task = new Task($_POST['description']);
$values = ['description' => $task->description, 'completed' => $task->completed];

$app['database']->insert('todos',$values);
$tasks = $app['database']->selectAll('todos');

header('Location: /');