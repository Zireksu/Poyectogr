<?php

if(!empty($_POST["btnIniciarSesion"])){
    if(empty($_POST["username"]) && empty($_POST["password"])){
        echo '<div class="alert alert-danger alertcred">CAMPOS VACIOS</div>';
    }else{
        require_once "../Modelo/Modelo.php";

        $enlace = new modelo();

        $response = $enlace->getUser($_POST["username"], $_POST["password"]);

        if($response == 1){
            header('location:../Vista/inicio.php');
        }else{
            echo '<div class="alert alert-danger alertcred">CREDENCIALES INVALIADAS</div>';
        }

    }
}
