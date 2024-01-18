<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=projectgr;charset=utf8mb4', 'root', '');
} catch (PDOexception $ex) {
    echo "Error al conectarse a la BBDD. ".$ex->getMessage();
}

//SEGUNDA CONEXION A LA BD PORQUE LA TUYA FER QUE TIENES ARRIBA NO ME FUNCIONA XDD
$conn = new mysqli(
    'localhost',
    'root',
    '',
    'projectgr',
  );
  
  //VERIFICAR CONEXION
  if ($conn->connect_error) {
    echo("Conexión fallida: " . $conn->connect_error);
  }
?>
