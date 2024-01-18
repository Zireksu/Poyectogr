$(document).ready(function(){


    $("#btn3").click(function(){
        $("#tabody tr").remove();

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Controlador/Controlador.php", true);

        xhr.setRequestHeader("Content-Type", "application/json");

        var datos={
                selectB: $("#selectB").val(),
                inputB:$("#inputB").val(),
                opcion: "filter"
            };

        var datosJSON = JSON.stringify(datos);

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                var respuesta = xhr.responseText;
                var decod = JSON.parse(respuesta);
                const tabody = document.getElementById("tabody");

                for(const paciente of decod){
                    const fila = document.createElement("tr");
                        console.log(paciente.nombre);
                    fila.innerHTML = `
                                        <td><a href="view_paciente.php?id=${paciente.cedula}"><button><img id="gotoimg" src="../Images/goto.svg" alt=""></button></a></td>
                                        <td>${paciente.nombre}</td>
                                        <td>${paciente.cedula}</td>
                                        <td>${paciente.direccion}</td>
                                        <td>${paciente.fecha_nacimiento}</td>
                                        <td>${paciente.genero}</td>
                                        <td>${paciente.medico_cabecera}</td>
                                        <td>${paciente.telefono}</td>
                                    `;
        
                    tabody.appendChild(fila);
                }
                
                
            }else{
                console.error("Hubo un error en la solicitud. Código de estado: " + xhr.status);
            }


        }

            xhr.send(datosJSON);
    });


    if(!$("#btn3").data("events") || !$("#btn3").data("events").click){
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Controlador/Controlador.php", true);

        xhr.setRequestHeader("Content-Type", "application/json");

        var datos={
                opcion: "listpacientes"
            };

        var datosJSON = JSON.stringify(datos);

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                var respuesta = xhr.responseText;
                var decod = JSON.parse(respuesta);
                const tabody = document.getElementById("tabody");

                for(const paciente of decod){
                    const fila = document.createElement("tr");
                        console.log(paciente.nombre);
                    fila.innerHTML = `
                                        <td><a href="view_paciente.php?id=${paciente.cedula}"><button id="goto" class="btn btn-danger"><img id="gotoimg" src="../Images/goto.svg" alt=""></button></a></td>
                                        <td>${paciente.nombre}</td>
                                        <td>${paciente.cedula}</td>
                                        <td>${paciente.direccion}</td>
                                        <td>${paciente.fecha_nacimiento}</td>
                                        <td>${paciente.genero}</td>
                                        <td>${paciente.medico_cabecera}</td>
                                        <td>${paciente.telefono}</td>
                                    `;
        
                    tabody.appendChild(fila);
                }
                
                
            }else{
                console.error("Hubo un error en la solicitud. Código de estado: " + xhr.status);
            }


        }

            xhr.send(datosJSON);
    }
})