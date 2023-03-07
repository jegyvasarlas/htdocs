<?php
// login-validate.php
include "functions.php";
require_once("db-connection.php");

$user = "";
$psw = "";
if( isset($_POST['username']) )
    $user = $_POST['username'];
if( isset($_POST["password"]))
    $psw = $_POST["password"];

// echo $user . " " . $psw;

$Con = ConnectDB();

$user = $Con->real_escape_string($user);
$psw = $Con->real_escape_string($psw);

$psw_hash = sha1($psw);
$Con->query("SET @user = '$user'");
$Con->query("SET @psw_hash = '$psw_hash'");
$sql = "CALL login('$user', '$psw_hash')";

echo $sql;

$result = $Con->query($sql);

if($result->num_rows == 1){
    $_SESSION["user"] = $user;
    header("Location: login.php?login=OK");
}
else{
    header("Location: login.php?login=NO");
}


?>