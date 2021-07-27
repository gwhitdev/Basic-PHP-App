<?php

class UsersController
{
    public function index()
    {
        $db = App::get('database');
        $users = $db->selectAll('users');
        return view('users/index',compact('users'));
    }

    public function store()
    {
        $db = App::get('database');
        $db->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');
    }
}