<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function save(){
        echo "register";
    }
}