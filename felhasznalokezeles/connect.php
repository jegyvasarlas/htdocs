<?php
function ConnectDB() {
    $con = new mysqli("localhost","root","","pizza");
    return $con;
}
function DisconnectDB($con) {
    $con->close();
}
?>