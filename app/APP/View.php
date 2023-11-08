<?php
namespace BieProject\Belajar\PHP\MVC\APP;

class View
{
    public static function render(string $view, $model)
    {
        require __DIR__ . "/../View/" . $view . '.php';
    }
}


?>