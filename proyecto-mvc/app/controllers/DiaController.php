<?php
namespace app\controllers;

class DiaController {
    public function dia1(){
        return $this->view('dia1', ['title' => 'dia1']);
    }
    public function dia2(){
        return $this->view('dia1', ['title' => 'dia2']);
    }
    public function dia3(){
        return $this->view('dia3', ['title' => 'dia3']);
    }
    public function dia4(){
        return $this->view('dia4', ['title' => 'dia4']);
    }
    public function dia5(){
        return $this->view('dia5', ['title' => 'dia5']);
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
