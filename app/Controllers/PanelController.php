<?php
namespace App\Controllers;

class PanelController extends Controller{
    public function index(){
        $this->view('Panel');
    }
}