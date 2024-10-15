<?php

trait View{

    public function view($dir,$vars = null){

        $dir = str_replace('.','/',$dir);
        $path = BASE_DIR.'/app/Views/'.$dir.'.php';
        if(file_exists($path)){
            return require_once $path;
        }
        else{
            echo 'this view ['.$dir.'] does not exist';
        }
    }

}