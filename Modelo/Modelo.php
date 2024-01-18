<?php
    session_start();

    class modelo{

    public function getUser($user, $pass)
    {
        
        require_once '../Conexion/conexion.php';
        $sql =  "CALL Get_User_Data('".$user."', '".$pass."')";
        $statement = $db->prepare($sql);
        $statement->execute();


        while ($row= $statement->fetch(PDO::FETCH_ASSOC)) {
        
            $Check = $row['cont'];
    
        }

        if ($Check == 1) {
            $_SESSION['login_ok'] = $user;
            return 1;
        }else {
            return null;
        }
    }


    public function getMail($user)
    {
        require_once 'config.php';
        global $db;

        $sql = "CALL get_email('".$user."')";
        $response = $db->prepare($sql);
        $response->execute();

        while($val = $response->fetch(PDO::FETCH_ASSOC)){
            $email = $val['mail'];
        }

        
        return $email;
    }

    public function changepass($user, $comb)
    {
        require_once 'config.php';
        global $db;

        $sql = "CALL change_pass('".$user."', '".$comb."')";
        $response = $db->prepare($sql);
        $response->execute();
        
        return 0;
    }

    public function get_pass($user)
    {
        require_once 'config.php';
        global $db;

        $sql = "CALL get_pass('".$user."')";
        $response = $db->prepare($sql);
        $response->execute();

        while($val = $response->fetch(PDO::FETCH_ASSOC)){
            $pass = $val['pass'];
        }

        return $pass;
    }

    public function get_dataSession($user){
        require_once 'config.php';
        global $db;

        $sql = "CALL get_dataSession('".$user."')";
        $response = $db->prepare($sql);
        $response->execute();

        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function get_patients($filtval = "", $filt = "", $lmt1, $lmt2){
        require_once 'config.php';
        global $db;

        $sql = "CALL list_patients('".$filtval."', '".$filt."', '".$lmt1."', '".$lmt2."')";
        $response = $db->prepare($sql);
        $response->execute();

        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function get_citastodate($doctor){
        require_once 'config.php';
        global $db;

        $sql = "CALL get_citastd('".$doctor."')";
        $response = $db->prepare($sql);
        $response->execute();

        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function get_citastnd($doctor){
        require_once 'config.php';
        global $db;

        $sql = "CALL get_citastnd('".$doctor."')";
        $response = $db->prepare($sql);
        $response->execute();

        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getcont_citas($var){
        require_once 'config.php';
        global $db;

        $sql = "CALL getcont_citas('".$var."')";
        $response = $db->prepare($sql);
        $response->execute();

        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}
