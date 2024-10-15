<?php
namespace App\Controllers;
use App\Models\User;
class RegisterController extends Controller{

    public function index(){

    
        $this->view('register');
    }
    public function store(){

        $data = $this->purg_post_request([
            'username','password','confirm_password'
        ]);             
        unset($data['confirm_password']);

        if(strlen($data['password'])<6){
            $this->back();
        }
        else if($data['password'] !== $data['confirm_password']){
            // flash("register","Passwords don't match");
            $this->back();
        }
      
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT); 

        $user = new User;
        if($user->create('users',$data)){
   
            return $this->redirect("login");
        }
        else{
            die("Something went wrong");
        }

    }
}