
const table = document.querySelector("#tablebody")
const modal = document.querySelector('#modalbody')
const tabledata = document.getElementById('tabledata')
const tablemodal = document.getElementById('tabledate')
const modalbutton = document.getElementById('modalbutton')

const element = tabledate.getElementsByTagName("td")
const options = {
    method: 'POST'
}


    //FETCH PARA HACER CONSULTA A LA BD Y LUEGO SEA MOSTRADO EN LA TABLA
    fetch ('../Modelo/viewpacient.php', options)
    .then(request => request.json())
    .then(response => {
        response.forEach(element => {
            table.innerHTML += `
            <div class="tablecontent">
            <tr>
                <th scope="row">${element.datenumber}</th>
                <td>${element.id}</td>
                <td>${element.name}</td>
                <td>${element.lastname}</td>
                <td><button type="button" id="btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalview">Ver detalles</button></td>
            </tr>
            </div>
            `
        });
    })


    
    

    /*FUNCION QUE SIRVE PARA DETECTAR A LA FILA SE LE HACE CLICK Y ASI CAPTURAR LOS DATOS DE ESE CAMPO PARA 
    LUEGO SER ENVIADOS A UNA CONSULTA A LA BD Y TRAER TODOS LOS DATOS DE ESA CITA EN ESPECIFICO*/
    tabledata.addEventListener('click', (e) =>{
        e.stopPropagation();
        const datenumber = e.target.parentElement.parentElement.children[0].textContent
        console.log(datenumber)
        
        
        $.ajax({
            type: "POST",
            url: "../Modelo/viewdetailpacient.php",
            data: `datenumber=${datenumber}`,
            success: function(response){
                
                modaldata(response)

                
                console.log("Datos enviados correctamente");
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
                alert("Hubo un error al mandar los datos, intentelo de nuevo");
            }
        });

        
    }) 

    //LUEGO DE HACER LA CONSULTA DEBE TRAER LOS DATOS DE LA CITA EN ESPECIFICO PARA LUEGO SER TRAIDA EN ESTA FUNCION Y LUEGO SEA MOSTRADA EN UN MODAL
    const modaldata = (dataJSON)=>{

        let data = JSON.parse(dataJSON)
        for(let item of data){
            /*console.log(item.name)]*/
            tablemodal.innerHTML = `
            <script type="text/javascript" src="../Controlador/viewmodaldata.js"></script>
            <tr class="trmodal">
                <td>
                <div class="mbmodal">
                    <label for="date" class="form-label">Fecha de cita</label>
                    <input type="text" class="form-control" id="date" name="date" value="${item.date}">
                </div>
                </td>
                <td>
                <div class="mbmodal">
                    <label for="id" class="form-label">Cédula</label>
                    <input type="text" class="form-control" id="id" name="id" value="${item.id}" disabled>
                </div>
                </td>
            </tr>
            <tr class="trmodal">
                <td>
                <div class="mbmodal">
                    <label for="id" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="name" name="name" value="${item.name}" disabled>
                </div>
                </td>
                <td>
                <div class="mbmodal">
                    <label for="id" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="${item.lastname}" disabled>
                </div>
                </td>
            </tr>
            <tr class="trmodal">
                <td>
                <div class="mbmodal">
                    <label for="id" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="age" name="age" value="${item.age}" disabled>
                </div>
                </td>
                <td>
                <div class="mbmodal">
                    <label for="id" class="form-label">Télefono celular</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="${item.phonenumber}" disabled>
                </div>
                </td>
            </tr>
            <tr class="trmodal">
                <td>
                <div class="mbmodal">
                    <label for="id" class="form-label">Tipo de consulta</label>
                    <input type="text" class="form-control" id="consulttype" name="consultype" value="${item.consulttype}" disabled>
                </div>
                </td>
                <td>
                <div class="mbmodal">
                    <label for="id" class="form-label">Médico</label>
                    <input type="text" class="form-control" id="doctor" name="doctor" value="${item.doctor}" disabled>
                </div>
                </td>
            </tr>

            <tr class="trmodal">
                <td colspan="2">
                <div class="mbmodalinput">
                    <label for="id" class="form-label">Observaciones del médico</label>
                    <textarea class="form-control" id="observation" name="observation" placeholder="Ingrese las obserciones al paciente"></textarea>
                </div>
                </td>
            </tr>

            <tr class="trmodal">
                <td colspan="2">
                <div class="mbmodalinput">
                    <label for="id" class="form-label">Receta Médica</label>
                    <textarea class="form-control" id="prescription" name="prescription" placeholder="Ingrese las recetas a recomendar al paciente"></textarea>
                </div>
                </td>
            </tr>
            <!--
            <form id="modalform">
        
            <div class="mb-4">
                <label for="inputid" class="form-label">Fecha</label>
                <input type="text" class="form-control" id="inputdate" name="date" value="${item.date}"> 
            </div>

            <div class="mb-4">
                <label for="inputid" class="form-label">Cédula</label>
                <input type="text" class="form-control" id="inputid" name="id" value="${item.id}"> 
            </div>

            <div class="mb-4">
                <label for="inputname" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputname" name="name" value="${item.name}">
            </div>

              <div class="mb-4">
                <label for="inputlastname" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="inputlastname" name="lastname" value="${item.lastname}">
              </div>

              <div class="mb-4">
                <label for="inputage" class="form-label">Edad</label>
                <input type="number" class="form-control" id="inputage" name="age" value="${item.age}">
              </div>

            <div class="mb-4">
              <label for="inputphone" class="form-label">Teléfono</label>
              <input type="number" class="form-control" id="inputphone" name="phone" value="${item.phonenumber}">
            </div>

            <button id="buttonmodal" type="submit" class="btn btn-primary">Enviar datos</button>
        
        </form>
            -->


        `
        }
        
    }

   

    $(document).ready(function(){
        $('#modalbutton').click(function(e){
            e.preventDefault();
    
            var formData = $('#tabledate').serialize();
    
            console.log(formData);
           /* $.ajax({
                type: "POST",
                url: "../Modelo/datehistory.php",
                data: formData,
                success: function(response){
                    console.log("Datos enviados correctamente");
                    
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(textStatus, errorThrown);
                    alert("Hubo un error al mandar los datos, intentelo de nuevo");
                }
            })*/
        });
    });


    //FUNCIONES PARA HACER EL MENU LATERAL ADAPTATIVO
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