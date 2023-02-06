<?php
function ConnectDB()
{
    $con = new mysqli('localhost','root','','hamburger');
    if ($con->connect_error) {
        die('Could not connect: ' . $con->connect_error);
    }
    return $con;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>🍔 Hamburger 🍔</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Udvozollek az oldalon 🍔ヾ(≧▽≦*)</h1>
    <div class="center">
        <a href="ujetel.php">Uj tetel felvetele</a>
    </div>
    <br>
    <div class="main">
        <div class="image">
            <img src="welcome.jpg" alt="hamburger">
        </div>
        <div class="table">
            <?php
            $con = ConnectDB();
            $sql = "SELECT nev, ar FROM menu";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                echo "<table><tr><th>Nev</th><th>Ar</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["nev"]. "</td><td>" . $row["ar"]. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Nincs talalat";
            }
            ?>
        </div>
    </div>

</body>
</html>
