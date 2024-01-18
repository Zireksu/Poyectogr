<?php

require_once('../Conexion/conexion.php');

//SE HACE CONSULTA A LA BD PARA TRAER LOS TIPOS DE CONSULTAS QUE EXISTEN
$sql ="SELECT * FROM departments;";
$request = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($request,MYSQLI_ASSOC);

//ENVIA INFORMACION EN JSON AL CONTROLADOR
if (!empty($data)){
    echo json_encode($data);
}
else{
    echo json_encode([]);
}

?>