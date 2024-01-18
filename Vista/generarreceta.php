<?php
include "lateralbar.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Recetas Médicas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #fff;
        }
        h1 {
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }
    
        #btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #btn:hover {
            background-color: #45a049;
        }

        #tit{
            margin-left: 160px;
            color: #fff;
        }

    </style>
</head>
<body>

<h1 id="tit">Generador de Recetas Médicas</h1>
    

    <form id="recetaForm">
    
        <label for="nombreDoctor">Nombre del Doctor:</label>
        <input type="text" id="nombreDoctor" name="nombreDoctor" required>

        <label for="paciente">Nombre del Paciente:</label>
        <input type="text" id="paciente" name="paciente" required>

        <label for="diagnostico">Diagnóstico:</label>
        <textarea id="diagnostico" name="diagnostico" rows="4" required></textarea>

        <label for="medicamentos">Medicamentos Recetados:</label>
        <textarea id="medicamentos" name="medicamentos" rows="4" required></textarea>

        <button id="btn" type="button" onclick="enviarReceta()">Enviar Receta</button>

        <!-- Botón para redirigir a la página de recetas pendientes -->
        <button id="btn" onclick="verRecetasPendientes()">Ver Recetas Pendientes</button>
    </form>

    <script>
        function enviarReceta() {
            var nombreDoctor = document.getElementById('nombreDoctor').value;
            var paciente = document.getElementById('paciente').value;
            var diagnostico = document.getElementById('diagnostico').value;
            var medicamentos = document.getElementById('medicamentos').value;

            var receta = {
                doctor: nombreDoctor,
                paciente: paciente,
                diagnostico: diagnostico,
                medicamentos: medicamentos
            };

            // Guardar la receta en el almacenamiento local
            var recetasPendientes = JSON.parse(localStorage.getItem('recetasPendientes')) || [];
            recetasPendientes.push(receta);
            localStorage.setItem('recetasPendientes', JSON.stringify(recetasPendientes));

            alert('Receta enviada con éxito');
            limpiarFormulario();
        }

        function limpiarFormulario() {
            document.getElementById('nombreDoctor').value = '';
            document.getElementById('paciente').value = '';
            document.getElementById('diagnostico').value = '';
            document.getElementById('medicamentos').value = '';
        }

        function verRecetasPendientes() {
            window.location.href = 'pruebareceta1.1.php';
        }
    </script>

</body>
</html>
