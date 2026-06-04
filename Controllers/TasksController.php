<?php

class TasksController
{
    
    public function create()
    {

        Task::create([
        'title'     => $_POST['title'],
        'color'     => $_POST['color'],
        'completed' => 0,
        
        ]);

        return redirect('/');
        
 
    }
    public function toggle()
    {
        $task = Task::find($_POST['id']);

        $task->update([
            'completed' => $_POST['completed'],
        ]);




        return redirect('/');
    }
    public function delete()
    {
        App::get('database')->delete('tasks',$_POST['id']);

        return redirect('/');
    }
}