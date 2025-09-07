<?php
require_once '..model/Product.php';

class HomeController {
    public function index(){
        $products = Product::getAll();
        require_once '..views/home/index.php';
    }
}