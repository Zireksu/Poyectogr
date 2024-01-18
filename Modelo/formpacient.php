<?php

require('../Conexion/conexion.php');


$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$consulttype = $_POST['consulttype'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];


// Preparar y vincular
$sql ="INSERT INTO formpacient (id, name, lastname, age, phonenumber, consulttype, doctor, date) VALUES ('$id', '$name','$lastname','$age','$phone','$consulttype','$doctor', '$date');";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados con éxito";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>
