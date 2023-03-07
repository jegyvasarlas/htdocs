<?php
session_start();
require("db-connection.php");

function setMyCookie()
{
    $aktualis = "";
    if(isset($_COOKIE['oldalak']))
        $aktualis = $_COOKIE['oldalok'];
    $page = $aktualis . " -> " . $_SERVER['REQUEST_URI'];
    setcookie("oldalak", $page);
}
function Rendelesek(){

    $Con = ConnectDB();

    $query = "call pr_RendelesekListazasa();";

    // echo $query;

    $result = $Con->query($query);

    $output = "";
    if($result->num_rows > 0){
        while( $row = $result->fetch_assoc() ){
            $output .= "<tr>";

                $output .= "<td>";
                    $output .= $row['vnev'];
                $output .= "</td>";

                $output .= "<td>";
                    $output .= $row['idopont'];
                $output .= "</td>";

                $output .= "<td>";
                    $output .= $row['pnev'];
                $output .= "</td>";

                $output .= "<td>";
                    $output .= $row['par'];
                $output .= "</td>";

                $output .= "<td>";
                    $output .= $row['db'];
                $output .= "</td>";

                $output .= "<td>";
                    $output .= $row['Összesen'];
                $output .= "</td>";

            $output .= "</tr>";
        }
    }
    else{
        echo "A lekérdezés nem adott vissza egy sort sem!";
    }

    DisconnectDB($Con);
    
    return $output;
}


function PizzaSzuresArSzerint($minAr, $maxAr, $rendez){
    $Con = ConnectDB();

    $sql = "call pr_PizzakSzuresArSzerint(@minAr, @maxAr, @rendez);";

    $Con->query("SET @minAr = $minAr");
    $Con->query("SET @maxAr = $maxAr");
    $Con->query("SET @rendez = '$rendez'");

    $result = $Con->query($sql);

    if($result->num_rows > 0){
        $output = "";
        while($row = $result->fetch_assoc() ){
            $output .= "<tr>";
                $output .= "<td>" . $row['pnev'] . "</td>";
                $output .= "<td>" . $row['par']  . "</td>";
            $output .= "</tr>";
        }
    }
    else{
        echo "<h3 class='hiba'>Nincs a keresési paramétereknek megfelelő pizza!</h3>";
    }

    DisconnectDB($Con);

    if( isset($output))
        return $output;
}
function ujFutarFelvetel($fnev,$ftel)
{
    $Con = ConnectDB();
    $fnev = $Con->real_escape_string($fnev);
    $ftel = $Con->real_escape_string($ftel);
    $sql = "SELECT futar.fazon from futar order by fazon desc limit 1";
    $result = $Con->query($sql);
    $row = $result->fetch_assoc();
    $id = $row['fazon'] + 1;
    DisconnectDB($Con);
    //var_dump($id);
    $Con = ConnectDB();
    $sql = "INSERT INTO futar VALUES ($id,'$fnev','$ftel')";
    $result = $Con->query($sql);
    DisconnectDB($Con);
    return $result;
}

function FilterInputText($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>
<style>
    html {
        font-family: Arial, Helvetica, sans-serif;
        zoom: 1.5;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
    }
</style>

