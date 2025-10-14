<?php
namespace app\controllers;

class HomeController {
    public function index() {
        ob_start();
        include __DIR__ . "/../views/home.php";
        return ob_get_clean();
    }
}
