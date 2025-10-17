<?php
namespace app\controllers;

use app\models\Visita;

class VisitaController {
    public function formulario() {
        $modelo = new Visita();
        $visitas = $modelo->obtenerTodas(); // obtener visitas

        ob_start();
        include __DIR__ . "/../views/visitas.php";
        return ob_get_clean();
    }

    public function registrar() {
        $nombre = $_POST['nombre'] ?? '';
        $comentario = $_POST['comentario'] ?? '';

        if (!empty($nombre) && !empty($comentario)) {
            $modelo = new Visita();
            $modelo->guardar($nombre, $comentario);
        }

        //despues de guardar, vuelve a cargar la misma vista con los datos actualizados
        $modelo = new Visita();
        $visitas = $modelo->obtenerTodas();

        ob_start();
        include __DIR__ . "/../views/visitas.php";
        echo ob_get_clean(); // muestra la misma vista actualizada
    }
}
