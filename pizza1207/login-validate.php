<?php
// login-validate.php
require("db-connection.php");

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
$sql = "SELECT FelhasznaloNev FROM felhasznalok WHERE FelhasznaloNev LIKE '$user' AND Jelszo LIKE '$psw_hash';";

echo $sql;

$result = $Con->query($sql);

if($result->num_rows == 1){
    //header("Location: login.php?login=OK");
}
else{
    //header("Location: login.php?login=NO");
}


?>