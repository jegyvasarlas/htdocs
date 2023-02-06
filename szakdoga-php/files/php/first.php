<?php
function ConnectDB() {
    $con = new mysqli("localhost","root","","jegyvasarlas");
    return $con;
}
function testSelect() {
    $con = ConnectDB();
    $sql = "SELECT nev FROM allomas";
    $result = $con->query($sql);
    $output = "";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $output .= $row["nev"]."<br>";
        }
    } else {
        $output = "0 results";
    }
    echo "<p>".$output."</p>";
}
function DisconnectDB($con) {
    $con->close();
}

?>
