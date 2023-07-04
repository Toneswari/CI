<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Welcome extends BaseController
{

public function index()
{
    // return view('welcome_message');
   // echo "hi welcome to this website";
    // $this->load->view('login');
    
}

public function view($page='login')
{
    return view('login');
}
// public function _remap($method){
//     echo $method;
// }
}