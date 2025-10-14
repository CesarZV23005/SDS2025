<?php
namespace app\controllers;

class InfoController {
    public function index() {
        ob_start();
        include __DIR__ . "/../views/info.php";
        return ob_get_clean();
    }
}
