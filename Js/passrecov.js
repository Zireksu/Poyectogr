$(document).ready(function () {

    function closemdl(usuario){
        $("#closemdl").trigger("click");

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Mail/Mailsend/mailsend.php", true);

        xhr.setRequestHeader("Content-Type", "application/json");

        var datos={
             username: usuario,
        };

        var datosJSON = JSON.stringify(datos);
        
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                var respuesta = xhr.responseText;
                console.log(respuesta);
                alert(respuesta.message);
            }else{
                console.error("Hubo un error en la solicitud. Código de estado: " + xhr.status);
            }
        }

        xhr.send(datosJSON);

    }

    $("#getpass").click(function(){
        
        var user = $("#userN").val();
        
        setTimeout(closemdl(user), 1000);
        
    })

})