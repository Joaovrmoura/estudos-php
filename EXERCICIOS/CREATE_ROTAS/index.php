<?php 

require 'vendor/autoload.php';

use myApp\core\{Request, Router};


// Request::file('routes.php');

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

