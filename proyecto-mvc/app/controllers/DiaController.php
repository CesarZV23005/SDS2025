<?php
namespace app\controllers;

class DiaController {
    public function dia1(){
        return $this->view('dia1', ['title' => 'dia1']);
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
