<?php

use AndreiCroitoru\FrameworkPhp\Config;
use AndreiCroitoru\FrameworkPhp\Router\Router;
use App\Application;

require '../vendor/autoload.php';

$appConfig = new \App\Config\AppConfig();

function exception_handler($exception)
{
    if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
        \AndreiCroitoru\FrameworkPhp\ExceptionHandler\ExceptionHandler::includeTemplate($exception);
    } elseif (file_exists(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . '500/500.html')) {
        include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . '500/500.html';
    } else {
        \AndreiCroitoru\FrameworkPhp\ExceptionHandler\ExceptionHandler::includeDefault500();
    }
}

set_exception_handler('exception_handler');

$routes = '../routes.yml';
$config = new Config($routes);
$router = new Router($config);
$app = new Application($router);

$app->run();
