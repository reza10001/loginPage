<?php
namespace App\Models;

use MeekroDB;

class Model{

    private static $instance;

    protected $mdb;
    private $dsn;
    private $user;
    private $pass;

    public function __construct()
    {
        if($this->mdb == null){
        try {            
            // $this->dsn = 'mysql:host='.$_ENV['dbHost'].';dbname='.$_ENV['dbName'];
            // $this->user = $_ENV['dbUser'];
            // $this->pass = $_ENV['dbPass'];
            $this->dsn = 'mysql:host=localhost;dbname=login_system';
            $this->user = 'root';
            $this->pass = '';
            $this->mdb = new MeekroDB($this->dsn,$this->user,$this->pass);

            } catch (\Throwable $th) {

           die($th->getMessage());
        }
    }
      
    }
    public function create($table, array $data){
        $result = $this->mdb->insert($table,$data);
        if($result) return true;                     
    }
    
}