<?php

$router->before('GET|POST', 'panel|panel/.*', function() {
    
    if (!isset($_SESSION['loggedin'])) {
        header('location:/login');
        // exit();
    }
});
$router->before('GET|POST', 'login|register', function() {
    
    if (isset($_SESSION['loggedin']) && isset($_SESSION['userAgent'])) {
        header('location:/panel');
        // exit();
    }
});