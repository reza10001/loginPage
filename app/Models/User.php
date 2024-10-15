<?php
namespace App\Models;

class User extends Model{

    private $table = 'users';
    public function findUser($username){

    return $account = $this->mdb->queryFirstRow("SELECT * FROM $this->table WHERE username=%s0", $username);
    }
    
}