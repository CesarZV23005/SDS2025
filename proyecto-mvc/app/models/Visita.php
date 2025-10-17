<?php
namespace app\models;

use PDO;
use PDOException;

class Database {
    private $host = "db";
    private $db_name = "db_visitas";
    private $username = "root";
    private $password = "rootpass";
    private $conn;

    public function getConnection() {
        if ($this->conn === null) {
            try {
                $this->conn = new PDO(
                    "mysql:host={$this->host};dbname={$this->db_name}",
                    $this->username,
                    $this->password
                );
                $this->conn->exec("SET NAMES utf8");
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                die("Error de conexión: " . $exception->getMessage());
            }
        }
        return $this->conn;
    }
}

class Visita {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //guardar nueva visita
    public function guardar($nombre, $comentario) {
        try {
            $sql = "INSERT INTO visitas (nombre, comentario, fecha) VALUES (:nombre, :comentario, NOW())";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':comentario', $comentario);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar la visita: " . $e->getMessage();
        }
    }

    //obbtener todas las visitas
    public function obtenerTodas() {
        try {
            $stmt = $this->conn->query("SELECT * FROM visitas ORDER BY fecha DESC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener visitas: " . $e->getMessage();
            return [];
        }
    }
}
