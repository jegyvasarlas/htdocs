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
    $jelszo2 = $_POST["password2"];
    if($jelszo == $jelszo2) {
        $con = ConnectDB();
        $sql = "insert into felhasznalok (FelhasznaloNev, Jelszo) values ('$felhasznalonev', SHA1('$jelszo'));";
        $result = $con->query($sql);
        if($result) {
            echo "<p class='center'>Sikeres regisztráció</p>";
            echo "<p class='center'><a href='login.php'>Vissza a bejelentkezeshez</a></p>";
        } else {
            echo "<p class='center'>Sikertelen regisztráció</p>";
            echo "<p class='center'><a href='registration.php'>Vissza a regisztrációhoz</a></p>";
        }
    } else {
        echo "<p class='center'>A két jelszó nem egyezik</p>";
        echo "<p class='center'><a href='registration.php'>Vissza a regisztrációhoz</a></p>";
    }
}
?>
</body>
</html>