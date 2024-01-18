<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles2.css">
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--<script src="../js/JQuery/jquery.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../Js/passrecov.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="modal" id="miModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Recuperación de Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <input id="userN" type="text" class="form-control" placeholder="Nombre de usuario">
      </div>
      <div class="modal-footer">
        <button id="getpass" type="button" class="btn btn-primary">Recuperar</button>
        <button id="closemdl" type="button" class="btn btn-secondary" data-dismiss="modal" hidden>Cerrar</button>
      </div>
    </div>
  </div>
</div>
<form method="post" action="">

<div class="container login-container d-flex justify-content-center align-items-center">
        <div class="row border p-3 bg-white shadow box-area">
           
            <div class="col1 col-md-6 left-box" style="align:center; background:#38b593; border-radius: 20px;">
                <div class="featured-image mb-3 text-center">
                    <img src="../Images/lock.png" class="image-fluid img" style="width: 150px;">
                </div>
                <br>
                
                <p><h4 class="col text-center" style="color: white;">Introduce tus credenciales para acceder</h4></p>
                    <div class="btn2">
                        <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                    </div>
                
            </div>
 
            <div class="col-md-6 right-box">
                <!-- Segunda división con las cajas de texto y el botón de inicio de sesión -->
                <form>
                    <div class="form-group">
                        <input type="text" class="rnd form-control" name="username" id="username" placeholder="Nombre de usuario">
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="rnd form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                            <?php
                                include ("../Controlador/logincontroller.php");
                            ?>
                    <div class="row">
                        <div class="bkpass">
                            <a  href="#" data-toggle="modal" data-target="#miModal"><strong>¿Olvidaste tu contraseña?</strong></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="btn1">
                            <button name="btnIniciarSesion" id="btnIniciarSesion" value="iniciar" class="btn btn-primary">Iniciar sesión</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    </form>



    <script src="../js/bootstrap.min.js"></script>
</body>
</html>