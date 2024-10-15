<?php
namespace App\Controllers;

use App\Models\User;
class AuthLogin extends Controller {

    public function index(){

        $this->view('login');
    }

    public function auth(){
      
        if(empty($_POST['email']) || empty($_POST['password'])){
             $this->back();
        }
        $data = $this->purg_post_request(['username','password']);
 
        $user = new User;
    
       $userData = $user->findUser($data['username']);
        
       if($userData == null){

         $this->back();
       }
       $hashedPassword = $userData['password'];

       $auth_result = password_verify($data['password'],$hashedPassword);
       
       if(!$auth_result){
   
        // flash("login",'user not found ');
        // $this->back();
      
       } 
       session_regenerate_id();
       $_SESSION['loggedin'] = TRUE;
       $this->createSession($userData);
       $this->redirect('panel');

    }
    
    private function createSession($userData){
        $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['username']  = $userData['username'];
        $_SESSION['sesCreated'] = time();
        $_SESSION['user_id'] = $userData['id'];
    }

        public function logout() {           
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id(true);
        return $this->redirect("login");
        }    
}

