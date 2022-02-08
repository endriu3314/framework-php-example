<?php

use AndreiCroitoru\FrameworkPhp\Config;
use AndreiCroitoru\FrameworkPhp\Router\Router;
use App\Application;

require '../vendor/autoload.php';

//use AndreiCroitoru\FrameworkPhp\Application;
//use AndreiCroitoru\FrameworkPhp\Config;
//use AndreiCroitoru\FrameworkPhp\Router\Router;

//function exception_handler($exception)
//{
//    if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
//        include \AndreiCroitoru\FrameworkPhp\ExceptionHandler\template.php;
//        include CORE . '/ExceptionHandler/template.php';
//    } else {
//        if (file_exists(TEMPLATES . '500/500.html')) {
//            include TEMPLATES . '500/500.html';
//        } else {
//            include CORE . '/ExceptionHandler/500.php';
//        }
//    }
//}

//set_exception_handler('exception_handler');

$routes = '../routes.yml';
$config = new Config($routes);
$router = new Router($config);
$app = new Application($router);

$app->run();
