<?php
class Router {
    public function run(){
        $controller = $_GET['controller']??'home';
        $action = $_GET['action']??'index';
        
        $controllerClass = ucfirst($controller).'Controller';
        require_once "../contollers/$controllerClass.php";
        $obj = new $controllerClass();
        $obj->$action();
    }
}