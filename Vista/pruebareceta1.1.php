<?php
include "lateralbar.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas Pendientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #fff;
        }
        h1 {
            color: #fff;
            margin-left: 180px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-left: 180px;
            width: 1100px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>

    <h1>Recetas Pendientes</h1>

    <ul id="recetasList"></ul>

    <script>
        // Obtener recetas pendientes del almacenamiento local
        var recetasPendientes = JSON.parse(localStorage.getItem('recetasPendientes')) || [];
        var recetasList = document.getElementById('recetasList');

        recetasPendientes.forEach(function(receta) {
            mostrarReceta(receta);
        });

        function mostrarReceta(receta) {
            var listItem = document.createElement('li');
            listItem.innerHTML = `
                <strong>Doctor:</strong> ${receta.doctor}<br>
                <strong>Paciente:</strong> ${receta.paciente}<br>
                <strong>Diagnóstico:</strong> ${receta.diagnostico}<br>
                <strong>Medicamentos Recetados:</strong> ${receta.medicamentos}
            `;
            recetasList.appendChild(listItem);
        }
    </script>

</body>
</html>
