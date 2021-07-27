<?php

class UsersController
{
    public function index()
    {
        $db = App::get('database');
        $users = $db->selectAll('users');
        return view('users/index',compact('users'));
    }
}