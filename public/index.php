<?php
require_once __DIR__ . '/../vendor/autoload.php';

use BieProject\Belajar\PHP\MVC\APP\Router;

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/login', 'UserController', 'index');
Router::add('GET', '/register', 'UserController', 'index');

Router::run();
?>