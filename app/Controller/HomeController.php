<?php 

namespace  BieProject\Belajar\PHP\MVC\Controller;
use BieProject\Belajar\PHP\MVC\APP\View;


class HomeController {

    function index(): void {
        $title = "Belajar PHP MVC";
        $content = "Semangat belajar PHP MVC nya";

        $model = [
            "title" => $title,
            "content" => $content,
        ];

        View::render("Home/index", $model);
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

    function login(): void {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST["password"],
        ];

        $user = [];

        $response = [
            "message" => "Anda berhasil login"
        ];

        //Kirimkan response tadi ke view
    }
}



?>