<?php
class ErrorController
{

    public static function error404($page) {
        require __DIR__ . '/../View/404.html.php';
    }
}