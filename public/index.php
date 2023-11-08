<?php
require_once __DIR__ . '/../vendor/autoload.php';

use BieProject\Belajar\PHP\MVC\APP\Router;
use BieProject\Belajar\PHP\MVC\Controller\HomeController;
use BieProject\Belajar\PHP\MVC\Controller\ProductController;


Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/author', HomeController::class, 'author');

Router::run();
?>