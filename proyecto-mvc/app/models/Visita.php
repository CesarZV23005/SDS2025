<?php

class Database {
    private $host = "db";
    private $db_name = "appdb"; 
    private $username = "appuser";
    private $password = "apppass";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conectado a la base de datos correctamente<br>";
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

class Visita {
    public $nombre;
    public $comentario;
    public $fecha;
}

// Instanciar conexión
$database = new Database();
$conn_temp = $database->getConnection();

// 🔹 Insertar registros de prueba
/*
$stmt = $conn_temp->prepare("INSERT INTO visitas(nombre, comentario) VALUES(:nombre, :comentario)");

$visita1 = new Visita();
$visita1->nombre = "Zule";
$visita1->comentario = "Excelente evento de apertura";

if ($stmt->execute((array)$visita1)) {
    echo "Insertado 1<br>";
}

$visita2 = new Visita();
$visita2->nombre = "Manuel";
$visita2->comentario = "Muy buena ponencia del día 2";

if ($stmt->execute((array)$visita2)) {
    echo "Insertado 2<br>";
}
*/

// 🔹 Consultar registros
$stmt = $conn_temp->query("SELECT * FROM visitas ORDER BY fecha DESC");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $item) {
    echo "Nombre: " . htmlspecialchars($item["nombre"]) . "<br>";
    echo "Comentario: " . htmlspecialchars($item["comentario"]) . "<br>";
    echo "Fecha: " . $item["fecha"] . "<hr>";
}
?>
