<?php

require_once __DIR__ . "/../../config/Database.php";

class producto {
    private $connection;

    public function __construct(){
        $db = new Database();
        $this->connection = $db->connect();
    }

    
   public function getAll(){
    $sql = "SELECT 
                productos.nombre AS producto_nombre,
                productos.precio,
                productos.categoria AS producto_categoria,
                productos.id_proveedor,
                proveedores.nombre AS proveedor_nombre
            FROM productos
            INNER JOIN proveedores ON productos.id_proveedor = proveedores.id";

    $consulta = $this->connection->query($sql);
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getById($id){
    $sql = "SELECT 
                productos.id,
                productos.nombre AS producto_nombre,
                productos.precio,
                productos.categoria AS producto_categoria,
                productos.id_proveedor,
                proveedores.nombre AS proveedor_nombre
            FROM productos
            INNER JOIN proveedores ON productos.id_proveedor = proveedores.id
            WHERE productos.id = :id";

    $stmt = $this->connection->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

