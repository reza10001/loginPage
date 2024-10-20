<?php
namespace App\Controllers;
use App\Models\User;
use App\Services\ImageUploader;

class RegisterController extends Controller{

    public function index(){

    
        $this->view('register');
    }
    public function store(){

        $data = $this->purg_post_request([
            'username','password','confirm_password'
        ]);             
   
        if( empty($_FILES['avatar'])){
                
            $this->back();
        } 

        if(strlen($data['password'])<6){
            $this->back();
        }
    
        else if($data['password'] !== $data['confirm_password']){
            // flash("register","Passwords don't match");
     
            $this->back();
        }
        unset($data['confirm_password']);
     
      
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT); 
     
        $img_result = (new ImageUploader())->getFile('avatar')
        ->withExt(['jpeg','jpg','png'])
        ->upload();
     
        $data['avatar'] = $img_result;

        $user = new User;
        if($user->create('users',$data)){
   
            return $this->redirect("login");
        }
        else{
            die("Something went wrong");
        }

    }
}