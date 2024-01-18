<?php

require('../Conexion/conexion.php');

//TRAE EL NUMERO DE CITA DE LA TABLA
$datenumber = $_POST['datenumber'];

//CONSULTA PARA TRAER EL CAMPO O CITA ESPECIFICA DEL PACIENTE Y LUEGO SER MOSTRADO EN EL MODAL
$sql ="SELECT * FROM formpacient WHERE datenumber='$datenumber';";
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