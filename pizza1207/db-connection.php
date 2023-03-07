<?php

function ConnectDB()
{
    $server = "localhost";
    $user = "bela";
    $psw = "bela123";
    $db = "pizza";

    $Con = new mysqli($server, $user, $psw, $db);

    // !!!! Sikerült-e a csatlakozás
    if($Con->connect_error)
        die("Adatbázishoz való kacsolódás közben hiba: " . $Con->connect_error );

    $Con->set_charset("utf8");

    return $Con;
}

function DisconnectDB(&$Con){
    $Con->close();
}


?>