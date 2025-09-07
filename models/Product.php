<?php
class Product{
    public static function getAll(){
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}