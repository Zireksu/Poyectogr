<?php

require('../Conexion/conexion.php');

//TRAE EL TIPO DE CONSULTA
$dataconsult = $_POST['data'];

//SE HACE CONSULTA A LA BD PARA SOLO TRAER LOS DOCTORES QUE SEAN EN AREA DEL TIPO DE CONSULTA
$sql ="SELECT * FROM doctors WHERE department='$dataconsult';";
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