<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function viewLogin()
    {
        return view('admin.users.login');
    }
    public function viewRegister()
    {
        return view('admin.users.register');
    }
}
