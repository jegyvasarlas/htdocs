<?php
include "functions.php";
include "menu.php";
require_once("db-connection.php");
echo $menu;
$con = ConnectDB();
$sql = "SELECT distinct kosar.pazon, p.pnev, p.par as ar, count(kosar.pazon) as db, count(kosar.pazon)*p.par as vegsoar, kosar.vazon 
        FROM kosar 
        LEFT JOIN pizza p ON kosar.pazon = p.pazon 
        WHERE kosar.vazon = (SELECT vazon FROM vevo WHERE vnev = '{$_SESSION['user']}') 
        GROUP BY kosar.pazon";
$result = $con->query($sql);
if($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Pizza neve</th>";
    echo "<th>Ár/db</th>";
    echo "<th>Mennyiség</th>";
    echo "<th>Ár</th>";
    echo "</tr>";
    $sum = 0;
    while($row = $result->fetch_assoc()) {
        $sum += $row['vegsoar'];
        echo "<tr>";
        echo "<td>" . $row['pnev'] . "</td>";
        echo "<td>" . $row['ar'] . " Ft</td>";
        echo "<td>" . $row['db'] . "</td>";
        echo "<td>" . $row['vegsoar'] . " Ft</td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='4'>Összesen: " . $sum . " Ft</td></tr>";
    echo "</table>";
    echo "<a href='kosar.php?lead=1'>Rendelés leadása</a> ";
    echo "<a href='kosar.php?urit=1'>Kosár ürítése</a>";
} else {
    echo "A kosar üres!";
}
if(isset($_GET['lead'])) {
    $sql = 'select razon from rendeles order by razon desc limit 1';
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $razon = $row['razon'];
    } else {
        echo mysqli_error($con);
    }
    $razon++;
    $actualdate = date("Y-m-d H:i:s");
    $sql = "select min(fazon) as minfazon, max(fazon) as maxfazon from futar";
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $minfazon = $row['minfazon'];
        $maxfazon = $row['maxfazon'];
        $randomfazon = rand($minfazon, $maxfazon);
    } else {
        echo mysqli_error($con);
    }
    $sql = "INSERT INTO rendeles (razon, vazon, fazon, idopont) VALUES ('$razon', (SELECT vazon FROM vevo WHERE vnev = '{$_SESSION['user']}'), '$randomfazon', '$actualdate')";
    $result = $con->query($sql);
    if($result) {
        $sql2 = "select pazon, count(pazon) as db from kosar where vazon = (SELECT vazon FROM vevo WHERE vnev = '{$_SESSION['user']}') group by pazon";
        $result2 = $con->query($sql2);
        if($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                $sql3 = "insert into tetel (razon, pazon, db) values ($razon, {$row['pazon']}, {$row['db']})";
                $result3 = $con->query($sql3);
                if($result3) {
                    $sql4 = "DELETE FROM kosar WHERE vazon = (SELECT vazon FROM vevo WHERE vnev = '{$_SESSION['user']}')";
                    $result4 = $con->query($sql4);
                    if($result4)
                    {
                        echo "<script>alert('Sikeres rendelés!');window.location.href = 'rendelesek.php';</script>";
                        unset($_GET['lead']);
                    } else {
                        echo mysqli_error($con);
                    }
                } else {
                    echo mysqli_error($con);
                }
            }
        } else {
            echo mysqli_error($con);
        }
    } else {
        echo mysqli_error($con);
    }
}
if(isset($_GET['urit'])) {
    $sql = "DELETE FROM kosar WHERE vazon = (SELECT vazon FROM vevo WHERE vnev = '{$_SESSION['user']}')";
    $result = $con->query($sql);
    if($result) {
        header("Location: kosar.php");
        unset($_GET['urit']);
    } else {
        echo mysqli_error($con);
    }
}
?>