<?php
function ConnectDB(){
    $server = "localhost";
    $user = "root";
    $psw = "";
    $db = "muzeum";

    $con = new mysqli($server, $user, $psw, $db);

    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    $con->set_charset("utf8");
    return $con;
}
?>