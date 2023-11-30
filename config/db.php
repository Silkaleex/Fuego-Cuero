<?php

class Database{
    public static function connect(){
        $db = new mysqli("localhost","root","3i7Ka7330Ba63D3dA10s","tienda");
        $db->query("SET NAMES 'UTF8'");
        return $db;
    }
}

?>