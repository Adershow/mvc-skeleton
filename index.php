<?php 
    require_once __DIR__ . '/vendor/autoload.php';

    use database\Config as Config;
    
    $config = new Config;
    $router = new \Bramus\Router\Router();

    $config->connect();

    $router->get('/', function() {
        $homeController = new controllers\HomeController;
        $homeController->index();
    });

    $router->get('/user/{userId}', function($userId) {
        $homeController = new controllers\HomeController;
        $homeController->findOne($userId);
    });

    $router->run();