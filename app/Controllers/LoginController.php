<?php namespace App\Controllers;

use CodeIgniter\Controller;
class LoginController extends Controller{
    public function index()
{
    // return view('welcome_message');
    // echo "login successful!";
    return view("main");
    
    // return view("footer");
    // $this->load->view('login');
    
}
}