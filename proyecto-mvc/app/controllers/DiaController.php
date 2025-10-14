<?php
namespace app\controllers;

class DiaController {
    public function dia1() { return $this->render("dia1"); }
    public function dia2() { return $this->render("dia2"); }
    public function dia3() { return $this->render("dia3"); }
    public function dia4() { return $this->render("dia4"); }
    public function dia5() { return $this->render("dia5"); }

    private function render($dia) {
        ob_start();
        include __DIR__ . "/../views/dias/{$dia}.php";
        return ob_get_clean();
    }
}
