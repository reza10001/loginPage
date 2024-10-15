<?php
namespace App\Controllers;

require BASE_DIR.'/traits/View.php';
require BASE_DIR.'/traits/Security.php';
require BASE_DIR.'/traits/Redirect.php';
use Security;
use Redirect;
use View;

class Controller{

    use View,Security,Redirect;
}