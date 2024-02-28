<?php
// this will be the controller page .
//this project will be working with fat free .
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

//initialize the fat free
$f3 = Base::instance(); // this is a static method

//initialize the controller class
$controller = new Controller($f3);

//routing to home /
$f3->route('GET /', function () {
    $GLOBALS['controller']->home();
});

//routing to hours form
$f3->route('GET|POST /hours', function () {
    $GLOBALS['controller']->hours();
});
$f3->run();