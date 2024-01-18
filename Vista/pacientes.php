<?php
include "lateralbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <script src="../Js/pacientes.js"></script>
</head>
<body>

    

<div class="container login-container d-flex justify-content-center align-items-center">
        <div class="row border p-3 bg-white box-area1">
            <div class="container mt-3">
            <div class="row">
                <div class="col-md-4">
                    <select id="selectB" class="custom-select" value="">
                        <option value="filname">Nombre</option>
                        <option value="filced">Cedula</option>
                        <option value="filmed">Médico</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" id="inputB" class="form-control" placeholder="Escribe aquí">
                        <div class="input-group-append">
                            <button id="btn3" class="btn btn-primary" type="button">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="col-md-12">
                <table class="table" id="tab">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nombre</th>
                            <th>Cedula</th>
                            <th>Dirección</th>
                            <th>Fecha Nacimiento</th>
                            <th>Genero</th>
                            <th>Médico</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody id="tabody">
            
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

