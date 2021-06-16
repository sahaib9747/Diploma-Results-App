<?php
session_start();
error_reporting(0);
$db_host = "localhost";
$db_user = "id12308139_diplomaresults";
$db_pass = "01854487";
$db_name = "id12308139_bteb";


global $connect;
$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

function redirect($link){
    header("Location: ".$link);
    exit();
}

class Login{
    public static $isLogged = 0;
    function log($mail, $pass){
        $data_catch = "SELECT email, password as pass FROM account WHERE email = '$mail' ";
        $query = mysqli_query($GLOBALS['connect'], $data_catch);

        while($data = mysqli_fetch_array($query)) 
        {
            $dbPass = $data['pass'];
            if($pass == $dbPass)
            {
                self::$isLogged = 1;
                return true;
            } 
            else
            {
                continue;
            }
        }
        return false;
    }

}

$_SESSION['isLogged'] = 0;

?>