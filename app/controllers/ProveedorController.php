<?php

require_once __DIR__ . "/../models/proveedor.php";

class ProveedorController{
    public function index() {
       $proveedor = new proveedor();
       $proveedor = $proveedor->getALL();

       require_once __DIR__ . "/../view/proveedor/index.php";
    }
}