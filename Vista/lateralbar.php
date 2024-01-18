<?php
session_start();

if(!isset($_SESSION['login_ok'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="../css/lateralbar.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/styles2.css">
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https:://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="../Js/lateralbar.js"></script>
</head>
<body class="dark">
    <input type="hidden" id="userval" value="<?php echo $_SESSION['login_ok']; ?>">
    <button id="switch" class="switch">
            <span><i class="fas fa-sun"></i></span>
            <span><i class="fas fa-moon"></i></span>
    </button>
    <div id="latbar" class="menu-collapsed">

        <div id="header">
            <div id="title">
                <span>Clínica MMJF</span>
            </div>
                <div id="menu-btn">
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                </div>
            
        </div>

        <div id="profile">
            <div id="photo">
                <img id="perfil" src="" alt="">
                <div id="name"><span></span></div>
            </div>
        </div>


        <div id="menu-items">
            <div class="item">
                <a href="pacientes.php">
                    <div class="icon"><img src="../Images/pacienteicon.png" alt=""></div>
                    <div class="title">Listar Pacientes</div>
                </a>
            </div>

            <div id="item separator">

            </div>

            <div class="item">
                <a href="formpacient.php">
                    <div class="icon"><img src="../Images/pacienteicon.png" alt=""></div>
                    <div class="title">Agregar paciente</div>
                </a>
            </div>
            <div class="item">
                <a href="viewpacient.php">
                    <div class="icon"><img src="../Images/pacienteicon.png" alt=""></div>
                    <div class="title">Ver Citas</div>
                </a>
            </div>
            <div class="item">
                <a href="generarreceta.php">
                    <div class="icon"><img src="../Images/pacienteicon.png" alt=""></div>
                    <div class="title">Crear Receta</div>
                </a>
            </div>


        </div>
        <button id="home" class="btn btn-danger">
            <img src="../Images/home.svg" alt="">
        </button>
        <button id="logout" class="btn btn-danger">
            <img src="../Images/logout.svg" alt="">
        </button>
        

    </div>


    <div id="main-container">
        
    </div>

    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#latbar');
        
        btn.addEventListener('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');

        });

    </script>
    <script src="../js/darkmode.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>