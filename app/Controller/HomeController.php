<?php 

namespace  BieProject\Belajar\PHP\MVC\Controller;


class HomeController {
    function index(): void {
        echo "HomeControleer.index()";
    }
    function hello(): void {
        echo "HomeController.hello()";
    }

    function world(): void {
        echo "HomeController.world()";
    }

    function author(): void
    {
        echo "Hello Author: Muhammad Farabie";
    }
}



?>