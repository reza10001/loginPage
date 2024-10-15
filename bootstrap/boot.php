<?php

// Require composer autoloader
require 'constants.php';

require BASE_DIR. '/vendor/autoload.php';

// Create Router instance

session_start();


$router = new \Bramus\Router\Router();

require BASE_DIR.'/app/Middlewares/Middlewares.php';
include BASE_DIR.'/routes/web.php';
// echo 'hi';

// exit;
// Run it!
$router->run();