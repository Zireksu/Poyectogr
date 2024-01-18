$(document).ready(function(){

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controlador/Controlador.php", true);

    xhr.setRequestHeader("Content-Type", "application/json");

    var datos={
            doctor: $("#userval").val(),
            opcion: "getcont_citas"
        };

    var datosJSON = JSON.stringify(datos);

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            var respuesta = xhr.responseText;
            var decod = JSON.parse(respuesta);
            var firstobj = decod[0];
/*
            var cardio = firstobj.cardiologia;
            cardio = cardio.split(',');

            var dermat = firstobj.dermatologia;
            dermat = dermat.split(',');

            var medicinaG = firstobj.medicina_g;
            medicinaG = medicinaG.split(',');

            var odontologia = firstobj.odontologia;
            odontologia = odontologia.split(',');
*/

            var cardio = {tipo:'Cardiologia', valor:firstobj.cardiologia.split(',').map(Number)};

            var dermat = {tipo:'Dermatologia', valor:firstobj.dermatologia.split(',').map(Number)};

            var medicinaG = {tipo:'Medicina General', valor:firstobj.medicina_g.split(',').map(Number)};

            var odontologia = {tipo:'Odontologia', valor:firstobj.odontologia.split(',').map(Number)};

            var allcats = [cardio, dermat, medicinaG, odontologia];

            function encontrarMayor(arr, categoria){
                var mayor = Math.max.apply(null, arr);
                return { valor: mayor, categoria: categoria };
            }
            

            function encontrarSegundoMayor(arr, categoria) {
                var max = Math.max.apply(null, arr);
                arr.splice(arr.indexOf(max), 1);
                var segundoMayor = Math.max.apply(null, arr);
                return { valor: segundoMayor, categoria: categoria };
            }

            function encontrarMenor(arr, categoria) {
                var menor = Math.min.apply(null, arr);
                return { valor: menor, categoria: categoria };
            }

            var mayor = encontrarMayor(allcats.flatMap(cat => cat.valor), 'global');

            var segundoMay = encontrarSegundoMayor(allcats.flatMap(cat => cat.valor), 'global');

            var menor = encontrarMenor(allcats.flatMap(cat => cat.valor), 'global');


            $("#lvl1").text(menor.valor);
            $("#lvl1_1").text(menor.categoria);
            
        }else{
            console.error("Hubo un error en la solicitud. Código de estado: " + xhr.status);
        }
    }

        xhr.send(datosJSON);



    $("#mdl_1").click(function(){
        $("#tabody1 tr").remove();

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Controlador/Controlador.php", true);

        xhr.setRequestHeader("Content-Type", "application/json");

        var datos={
                doctor: $("#userval").val(),
                opcion: "citastodate"
            };

        var datosJSON = JSON.stringify(datos);

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                var respuesta = xhr.responseText;
                var decod = JSON.parse(respuesta);
                const tabody = document.getElementById("tabody1");

                for(const paciente of decod){
                    const fila = document.createElement("tr");
                        //console.log(paciente.nombre);
                    fila.innerHTML = `
                                        <td><a href="view_paciente.php?id=${paciente.id}"><button><img id="gotoimg" src="../Images/goto.svg" alt=""></button></a></td>
                                        <td>${paciente.id}</td>
                                        <td>${paciente.name+" "+paciente.lastname}</td>
                                        <td>${paciente.age}</td>
                                        <td>${paciente.consulttype}</td>
                                        <td>${paciente.date}</td>
                                    `;
        
                    tabody.appendChild(fila);
                }
                
                
            }else{
                console.error("Hubo un error en la solicitud. Código de estado: " + xhr.status);
            }


        }

            xhr.send(datosJSON);
    });
})