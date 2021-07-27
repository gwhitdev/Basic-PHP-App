<?php

class PagesController
{
    public function home()
    {
        $db = App::get('database');

        $tasks = $db->selectAll('todos');
        $users = $db->selectAll('users');
        return view('index', compact('users','tasks'));
    }
    public function about()
    {
        $name = "Gareth Devs";

        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about_culture()
    {
        return view('about-culture');
    }
    public function addTask()
    {
        $task = new Task($_POST['description']);
        $values = ['description' => $task->description, 'completed' => $task->completed];
        $db = App::get('database');
        $db->insert('todos',$values);
        $tasks = $db->selectAll('todos');
        header('Location: /');
    }

    public function addUser()
    {
        $user = new User($_POST['name']);
        $values = ['name' => $user->name];
        $db = App::get('database');
        $db->insert('users',$values);
        $users = $db->selectAll('users');
        header('Location: /');
    }
}