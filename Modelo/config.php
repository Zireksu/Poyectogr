<?php
try {
    global $db;
    $db = new PDO('mysql:host=localhost;dbname=projectgr;charset=utf8mb4', 'root', '');
} catch (PDOexception $ex) {
    echo "Error al conectarse a la BBDD. ".$ex->getMessage();
}
