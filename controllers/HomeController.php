<?php
require_once '../models/Product.php';

class HomeController {
    public function index(){
        $products = Product::getAll();
        require_once '../views/home/index.php';
    }
}