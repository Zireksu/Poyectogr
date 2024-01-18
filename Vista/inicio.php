<?php
include "lateralbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
   <!-- <script src="../Js/inicio.js"></script>-->
    <style>
        .coll1 {
            background-color: #556B2F;
            left: 10px;
            width: auto;
        }
        .coll2{
            background-color: #12548A;
            left: 20px;
        }
        .coll3{
            background-color: #912629;
            left: 30px;
        }
        .r1{
            height:150px;
        }

        .enf1{
            color:#fff;
          
        }
        .cal{
            font-size: 50px;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<input type="hidden" value="">
<div class="modal" id="miModal1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Citas a atender hoy</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
                <table class="table" id="tabb">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Tipo de consulta</th>
                            <th>Fecha agendada</th>
                        </tr>
                    </thead>
                    <tbody id="tabody1">
            
                    </tbody>
                </table>
            </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal" id="miModal2">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Citas a atender mañana</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
                <table class="table" id="tabb">
                    <thead>
                        <tr>
                        <th></th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Tipo de consulta</th>
                            <th>Fecha agendada</th>
                        </tr>
                    </thead>
                    <tbody id="tabody2">
            
                    </tbody>
                </table>
            </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



    <br><br>
    <div class="container  justify-content-center align-items-center">
        <div class="row p-3" id="enf">
            <div class="col-md-12">
                <h3>Consultas más Frecuentes</h3>
            </div>
        </div>
        <div class="row p-3 r1">
            <div class="col-md-4 coll1">
                <h4 id="lvl1" class="text-center enf1">Cardiología</h4>
                <h1 id="lvl1_1" class="text-center enf1">10</h1>
            </div>
            <div class="col-md-4 coll2">
                <h4 id="lvl2" class="text-center enf1">Odontología</h4>
                <h1 id="lvl2_1" class="text-center enf1">13</h1>
            </div>
            <div class="col-md-4 coll3">
                <h4 id="lvl3" class="text-center enf1">Medicina General</h4>
                <h1 id="lvl3_1" class="text-center enf1">22</h1>
            </div>
        </div>
        <br>

        <div class="row p-3 r1">
            <div class="col-md-6 coll1">
                <h4 class="text-center enf1">Citas para hoy</h4>
                <h1 class="text-center enf1"><a id="mdl_1" class="cal" href="#" data-toggle="modal" data-target="#miModal1"><strong id="txtstr1">10</strong></a></h1>
            </div>
            <div class="col-md-6 coll2">
                <h4 class="text-center enf1">Citas para mañana</h4>
                <h1 class="text-center enf1"><a id="mdl_2" class="cal" id="cal" href="#" data-toggle="modal" data-target="#miModal2"><strong id="txtstr2">7</strong></a></h1>
            </div>
        </div>
    </div>
</body>
</html>