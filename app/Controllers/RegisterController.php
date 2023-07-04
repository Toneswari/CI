<?php namespace App\Controllers;

use CodeIgniter\Controller;
class RegisterController extends Controller{
    public function index()
{
    // return view('welcome_message');
    // echo "login successful!";
    return view("register");
    
    // return view("footer");
    // $this->load->view('login');
    
}
}