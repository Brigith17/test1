<?php
require_once '../models/Product.php';

class HomeController {
    public function index(){
        $products = Product::getAll();
        require_once '../views/home/index.php';
    }

     public function crear_producto(){
        require_once '../views/home/formulario_crear_producto.php';
    }
    
     public function guardar_producto(){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        Product::crear($nombre, $precio);
        header("Location: index.php?controller=home&action=index");
    }
}