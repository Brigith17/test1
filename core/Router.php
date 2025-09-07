<?php
class Router {
    public function run(){
        $controller = $_GET['controller']??'home';
        $action = $_GET['action']??'index';
        echo "Controller: ";
        
        $controllerClass = ucfirst($controller).'Controller';
        require_once "../controllers/$controllerClass.php";
        $obj = new $controllerClass();
        $obj->$action();
    }
}