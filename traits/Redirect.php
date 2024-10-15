<?php

trait Redirect{

    public function redirect(string $url){
        
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https')===true ?
         'https://' : 'http://';

        header("Location: ".$protocol.$_SERVER['HTTP_HOST'].'/'.$url);
    }
    public function back(){
       $http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
       if($http_referer !=null){
       header("Location:".$http_referer);
    }else {
        echo 'route not found';
    }
    }
}