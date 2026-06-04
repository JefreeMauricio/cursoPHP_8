<?php
namespace App\Controllers;

use App\Models\Task;

class HomeController {
    public function show() 
    {
        $greeting = 'Hola mundo';

        $tasks = Task::all();


        // se hizo cambvio ya que  mostraba un error en pantalla , no dejaba ver los completed task
        $completedTasks = array_filter($tasks, function ($task) {
            return $task->completed;
        });

        $pendingTasks = array_filter($tasks, function ($task) {
            return !$task->completed;
        });

        return view('index',[
            'greeting' => $greeting,
            'tasks' => $tasks,
            'completedTasks' => $completedTasks,
            'pendingTasks' => $pendingTasks
        ]);
    

    }
}