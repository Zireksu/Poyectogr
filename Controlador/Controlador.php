<?php
require_once "../Modelo/Modelo.php";

$enlace = new modelo();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents("php://input");

    $datos = json_decode($data);

    if ($datos !== null) {
        $OP = $datos->opcion;

        switch($OP){            
            case "latbar":
                $user = $datos->username;

                $response = $enlace->get_dataSession($user);

                header('Content-Type: application/json');
                echo json_encode($response);
            break;

            case "logout":
                
                unset($_SESSION['login_ok']);

                
                if(!isset($_SESSION['login_ok'])){
                    header('Content-Type: application/json');
                    echo json_encode("1");
                }

            break;

            case "listpacientes":
                $response = $enlace->get_patients('','','0','50');

                header('Content-Type: application/json');
                echo json_encode($response);
            break;

            case "filter":
                $selectB = $datos->selectB;
                $inputB = $datos->inputB;

                if($selectB != "" && $inputB != ""){
                    $response = $enlace->get_patients($inputB, $selectB, '0','50');
                }else{
                    $response = $enlace->get_patients('','','0','50');
                }
                
                
                header('Content-Type: application/json');
                echo json_encode($response);
            break;

            case "citastodate":
                $response = $enlace->get_citastodate($datos->doctor);
                header('Content-Type: application/json');
                echo json_encode($response);
            break;

            case "citastnd":
            break;

            case "getcont_citas":
                $response = $enlace->getcont_citas($datos->doctor);
                header('Content-Type: application/json');
                echo json_encode($response);
            break;
        }

    }else{
        http_response_code(400);
        echo json_encode(array("error" => "No se pudieron procesar los datos."));
    }
}else{
    http_response_code(405);
    echo json_encode(array("error" => "Método no permitido"));
}

?>