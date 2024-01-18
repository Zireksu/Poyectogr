<?php

require('../Conexion/conexion.php');

/*CONSULTA PARA TRAER TODOS LOS DATOS DE LA TABLA PACIENTE */
$sql ="SELECT * FROM formpacient;";
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