<?php
class Product{
    public static function getAll(){
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($nombre, $precio){
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO productos(nombre, pvp) VALUES (?,?)");
        return $stmt->execute([$nombre, $precio]);
    }
}