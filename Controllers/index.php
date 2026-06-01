<?php


$greeting = 'Hola mundo';

$tasks = Task::all();


// se hizo cambvio ya que  mostraba un error en pantalla , no dejaba ver los completed task
$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task->completed;
});

require 'Views/index.view.php';
