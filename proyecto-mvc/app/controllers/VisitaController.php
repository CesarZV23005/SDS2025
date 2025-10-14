<?php
namespace app\controllers;

use app\models\Visita;

class VisitaController {
    public function formulario() {
        ob_start();
        include __DIR__ . "/../views/visitas.php";
        return ob_get_clean();
    }

    public function registrar() {
        $nombre = $_POST['nombre'] ?? '';
        $comentario = $_POST['comentario'] ?? '';
        $modelo = new Visita();
        $modelo->guardar($nombre, $comentario);
        header("Location: /public/visitas");
        exit;
    }
}
