$(document).ready(function(){

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controlador/Controlador.php", true);

    xhr.setRequestHeader("Content-Type", "application/json");

    var datos={
            username: $("#userval").val(),
            opcion: "latbar"
        };

    var datosJSON = JSON.stringify(datos);

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            var respuesta = xhr.responseText;
            var decod = JSON.parse(respuesta);
            var firstobj = decod[0];

            $("#perfil").attr("src", firstobj.foto);
            $("#name span").text(firstobj.nombre +" "+firstobj.apellido);
            
        }else{
            console.error("Hubo un error en la solicitud. Código de estado: " + xhr.status);
        }
    }

        xhr.send(datosJSON);




   $("#logout").click(function(){

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Controlador/Controlador.php", true);

        xhr.setRequestHeader("Content-Type", "application/json");

        var datos={
                opcion: "logout"
            };

        var datosJSON = JSON.stringify(datos);

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                var respuesta = xhr.responseText;
                console.log(respuesta);
            }else{
                console.error("Hubo un error en la solicitud. Código de estado: " + xhr.status);
            }
        }

            xhr.send(datosJSON);

        
            window.location.href = "../Vista/login.php?";
   })     


   $("#home").click(function(){
        window.location.href = "../Vista/inicio.php";
   })

});