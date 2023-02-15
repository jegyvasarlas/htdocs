<?php
include "functions.php";
include "menu.php";
require_once("db-connection.php");
$con = ConnectDB();
$sql = "SELECT * FROM pizza";
$result = $con->query($sql);
echo $menu;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row['pnev'] . " " . $row['par'] . " Ft ";
        if(isset($_SESSION['user']))
        {
            echo "<a href='pizzak.php?pazon=" . $row['pazon'] . "'>Rendelés</a>";
        }
        echo "<br>";
    }
}
else{
    echo "Nincs pizza!";
}
if(isset($_GET['pazon'])) {
    $pazon = $_GET['pazon'];
    $sql = "select vazon from vevo where vnev = '" . $_SESSION['user'] . "'";
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $vazon = $row['vazon'];
    } else {
        echo mysqli_error($con);
    }
    $sql = "insert into kosar (pazon, vazon) values ($pazon, $vazon)";
    $result = $con->query($sql);
    if($result) {
        echo "<script>alert('Sikeres kosarhoz adas!');window.location.href = 'pizzak.php';</script>";
    } else {
        echo mysqli_error($con);
    }
    unset($_GET['pazon']);
} else {
    echo mysqli_error($con);
}

?>
