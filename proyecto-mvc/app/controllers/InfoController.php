<?php
namespace app\controllers;

class InfoController {
    public function info(){
        return $this->view('info', ['title' => 'Bienvenido']);
    }
    private function view($vista, $data = []){
        extract($data);
        $rutaVista = __DIR__ . "/../views/$vista.php";
        if(file_exists($rutaVista)){
            ob_start();
            include $rutaVista;
            return ob_get_clean();
        }
        return "Vista no encontrada: $vista";
    }
}
