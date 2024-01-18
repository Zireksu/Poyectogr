<?php
include "lateralbar.php";
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/viewpacient.css"/>
    <link rel="stylesheet" href="../css/navbar.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>Ver Citas</title>
   

  </head>
  <body>
<!--
    <div id="root">

    MENU LATERAL
      <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
          DIV PARA CREAR EL ESPACIO DEL PERFIL DEL USUARIO
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"><span
                        class="text-white">Aqui debes cargar el perfil xd</span></h1>
                        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i
                          class="fal fa-stream"></i></button>
            </div>
            <ul class="list-unstyled px-2">

              <li class="colorhover"><a href="inicio.php" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between"> <span><i
                class="fal fa-home"></i>  Página Principal</span></a></li>
   
              <li class="colorhover"><a href="formpacient.html" class="text-decoration-none px-3 py-2 d-block">
                  <i class="fas fa-notes-medical"></i> Agregar Paciente</a></li>

              <li class="active"><a href="viewpacient.html" class="text-decoration-none px-3 py-2 d-block">
                  <i class="fas fa-th-list"></i> Citas </a></li>

              <li class="colorhover"><a href="pacientes.php" class="text-decoration-none px-3 py-2 d-block">
                <i class="fas fa-hospital-user"></i> Pacientes</a></li>

              <li class="colorhover"><a href="#" class="text-decoration-none px-3 py-2 d-block">
                <i class="fas fa-history"></i> Historial Citas</a></li>
        </ul>

            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">
                <li class="colorhover"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i>
                        Notificaciones</a></li>
                <li class="colorhover"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-sign-out-alt"></i>
                        Cerrar sesión</a></li>

            </ul>

        
      </div>
-->
        <!--NAVBAR SUUOPERIOR PARA IMPLEMENTAR EL LOGO Y EL NOMBRE-->
        <div class="content">



        <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-sm">
        <div class="d-flex justify-content-between d-md-none d-block">
            <button class="btn px-1 py-0 open-btn me-2"><i class="fal fa-stream"></i></button>
        </div>

        <ul class="menu">
            <li id="logo">
                <img src="../Images/logo-clinica.png" alt="Logo" width="40" height="40" class="d-inline-block">
                Clinica X
            </li>
        </ul>
    </div>
</nav>


      <!--TABLA PARA MOSTRAR LAS CITAS-->
      <div class="d-flex justify-content-center p-4">
      <table id="tabledata" class="table table-success table-striped">
        <thead>

          <tr >
            <th scope="col">Cita número:</th>
            <th scope="col">Cédula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Ver detalles</th>
          </tr>

        </thead>

        <tbody id="tablebody">

        </tbody>
      </table>
      </div>


      </div>
      </div>
    </div>


      <!--MODAL PARA CARGAR TODOS LOS DATOS DE UN PACIENTE EN ESPECIFICO-->
      <div class="modal fade" id="modalview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content d-flex" id="modalcontent">
            <div class="modal-header" >
              <h1 class="modal-title fs-5" id="exampleModalLabel">Información del paciente</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="modalbody" class="modal-body">
              <table class="table" id="tabledate">

              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button id="modalbutton" type="submit" class="btn btn-primary">Enviar datos</button>
            </div>
          </div>
        </div>
      </div>

      

      <!--LLAMADA DE SCRIPT JS DESDE OTRO ARCHIVO-->
      <script type="text/javascript" src="../Controlador/viewdata.js"></script>
  </body>
</html>

