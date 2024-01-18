<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../../Modelo/Modelo.php";

require '../src/PHPMailer.php';
require '../src/SMTP.php';
require '../src/Exception.php';

$enlace = new modelo();
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = file_get_contents("php://input");
    $datos = json_decode($data);
    if ($datos !== null) {
        $user = $datos->username;
    }
}




$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$comb = '';

for($i = 0; $i < 10; $i++){
    $comb .= $characters[rand(0, strlen($characters)-1)];
}

$enlace->changepass($user, $comb);



try {
    
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'jsondev.online';
    $mail->SMTPAuth = true;
    $mail->Username = 'clinicdev@jsondev.online';
    $mail->Password = 'KcXNeFhW4Rp7';
    $mail->SMTPSecure = 'tls'; //tls
    $mail->Port = 465;

    $password = $enlace->get_pass($user);
    $email = $enlace->getMail($user);
    
    $mail->setFrom('clinicdev@jsondev.online', 'Sistema Clinico');
    $mail->addAddress($email);

    
    
    $mail->isHTML(true);
    $mail->Subject = 'RECUPERACIÓN DE CONTRASEÑA';
    $mail->Body = "
                    <html>
                        <body>
                            <h1>RECUPERACION DE CLAVE</h1>
                            <h3>$password</h3>

                        </body>
                    </html>
                 ";

    if(!$mail->send()){
        header('Content-Type: application/json');
        echo json_encode(array('message' => 'Ha ocurrido un error al enviar el correo!!'));
    }else{
        header('Content-Type: application/json');
        echo json_encode(array('message' => 'Correo enviado con éxito a: $email'));
    }

} catch (Exception $e) {
    echo json_encode(array('message' => 'Hubo un error al enviar el correo: ' . $mail->ErrorInfo));
}

?>