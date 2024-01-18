
const consulttype = document.getElementById('select1')
const options = {
    method: 'POST'
}
const dataform = document.getElementById('form1')
const select2 = document.getElementById('select2')
const modalform = document.getElementById('modalbody')

//FUNCION PARA MANDAR DATOS DEL FORMULARIO A LA BD
$(document).ready(function(){
    $('#button1').click(function(e){
        e.preventDefault();

        var formData = $('#form1').serialize();

        console.log(formData);
        $.ajax({
            type: "POST",
            url: "../Modelo/formpacient.php",
            data: formData,
            success: function(response){
                console.log(response);
                modalconfirm("Datos enviados correctamente");
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
                alert("Hubo un error al mandar los datos, intentelo de nuevo");
            }
        })
        .done(function(answer){
            console.log(answer);
        })
        .fail(function(){
            console.log("Error")
        })
        .always(function(){
            console.log("Porceso completado")
        });
    });
});


//FUNCION PARA MANDAR DATOS AL MODAL DEL FORMULARIO AL ENVIAR LOS DATOS AL MODAL
const modalconfirm = (message) => {
        
            modalform.innerHTML += `
            <div><i class="bi bi-check-circle-fill"></i><h2>${message}</h2></div>
            `
        
}

const modalerror = (response, message) => {
        
    modalform.innerHTML += `
    <div><i class="bi bi-x-square"></i><h2>${message}</h2></div>
    <div>Informe técnico: ${response}</div>
    `

}



//FETCH PARA LLENAR LOS DATOS DEL SELECT 'TIPO DE CONSULTA' HACIENDO UNA CONSULTA A LA BD
fetch ('../Modelo/consulttype.php', options)
    .then(request => request.json())
    .then(response => {
        response.forEach(item => {
            consulttype.innerHTML += `
                <option>${item.department}</option>
            `
        });
    })




//FUNCION PARA MANDAR MANDAR HACER UNA CONSULTA A LA BD SOBRE LOS MEDICOS DEPENDIENDO DE DEL TIPO DE CONSULTA QUE SE HAYA ELEGIDO
    dataform.addEventListener('click', (e) =>{
        e.stopPropagation();

        let select1 = document.getElementById('select1')

        select1.onchange = function () {
            addtoSelect2(this.value)
          }

        function addtoSelect2(dataconsult){

            $.ajax({
                type: "POST",
                url: "../Modelo/doctor.php",
                data: `data=${dataconsult}`,
                success: function(response){
                    
                    doctordata(response)
                    
                    
                    console.log("Datos enviados correctamente");
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(textStatus, errorThrown);
                    alert("Hubo un error al mandar los datos, intentelo de nuevo");
                }
            })

        }

        
        

        
    }) 

    
    //FUNCION PARA TRAER EL RESULTADO DE LA CONSULTA A LA BD Y LUEGO SE AGREGAN AL SELECT DE 'MEDCIO A ATENDER'
    const doctordata = (dataJSON)=>{

        let data = JSON.parse(dataJSON)
       
        select2.innerHTML = `<option selected disabled>Seleccione el médico a atender</option>`
        for(let item of data){
            select2.innerHTML += `
            <option>${item.namedoctor}</option>
            `
        }

        /*console.log(select2.children[0].textContent)*/
        
    }



    
    //FUNCIONES PARA HACER ADAPTATIVO EL MENU LATERAL
    $(".sidebar ul li").on('click', function () {
        $(".sidebar ul li.active").removeClass('active');
        $(this).addClass('active');
    });

    $('.open-btn').on('click', function () {
        $('.sidebar').addClass('active');

    });


    $('.close-btn').on('click', function () {
        $('.sidebar').removeClass('active');

    })