<?php

trait Security{

    public function purg_post_request(array $input){
        if($input === $_POST){
            foreach($_POST as $key =>$val){
                $result[$key]=htmlentities($val);
                $result[$key]=trim($val);
            }
            return $result;

        }
        else{
            foreach($input as $val){
                $result[$val]=htmlentities($_POST[$val]);
                $result[$val]=trim($_POST[$val]);
            }
            return $result;
        }
        
    }
}