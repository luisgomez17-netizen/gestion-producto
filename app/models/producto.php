<?php

require_once __DIR__ . "/../../config/Database.php";

class producto {
    private $connection;
    
    public function __construct(){
        $db = new Database();
        $thhis->connection = $db->connect();
    }

    public function getAll(){
        $sql = "SELCT * FROM productos";
        
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
        

    }
}