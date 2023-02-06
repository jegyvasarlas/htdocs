<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="other">
<?php
include_once "connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $felhasznalonev = $_POST["username"];
    $jelszo = $_POST["password"];
    $con = ConnectDB();
    $sql = "select FelhasznaloNev from felhasznalok where FelhasznaloNev like '$felhasznalonev' and Jelszo like SHA1('$jelszo');";
    $result = $con->query($sql);
    if($result->num_rows == 1) {
        echo "<p class='center'>Sikeres bejelentkezes</p>";
    } else {
        echo "<p class='center'>Hibás felhasználónáv / jelszó</p>";
        echo "<p class='center'><a href='login.php'>Vissza a bejelentkezeshez</a></p>";
    }
}
?>
</body>
</html>


