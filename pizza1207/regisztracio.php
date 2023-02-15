<?php
include "functions.php";
include "menu.php";
require_once("db-connection.php");
echo $menu;
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP és MySQL összekapcsolása</title>
</head>
<body>
    <h2>Regisztráció</h2>
    <form action="regisztracio.php" method="post">
        <label for="username">Felhasználónév:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Jelszó:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="password2">Jelszó mégegyszer:</label>
        <input type="password" name="password2" id="password2" required>
        <br>
        <label for="lakcim">Lakcím:</label>
        <input type="text" name="lakcim" id="lakcim" required>
        <br>
        <input type="submit" value="Regisztráció">
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $user = "";
    $psw = "";
    $psw2 = "";
    $lakcim = "";
    if( isset($_POST['username']) )
        $user = $_POST['username'];
    if( isset($_POST["password"]))
        $psw = $_POST["password"];
    if( isset($_POST["password2"]))
        $psw2 = $_POST["password2"];
    if( isset($_POST["lakcim"]))
        $lakcim = $_POST["lakcim"];
    $Con = ConnectDB();
    $user = $Con->real_escape_string($user);
    $psw = $Con->real_escape_string($psw);
    $psw2 = $Con->real_escape_string($psw2);
    $lakcim = $Con->real_escape_string($lakcim);
    if($psw != $psw2) {
        echo "A két jelszó nem egyezik!";
        exit();
    }
    $psw_hash = sha1($psw);
    $sql = "INSERT INTO felhasznalok (FelhasznaloNev, Jelszo) VALUES ('$user', '$psw_hash');";
    $result = $Con->query($sql);
    $sql = "SELECT vazon from vevo order by vazon desc limit 1";
    $result = $Con->query($sql);
    $row = $result->fetch_assoc();
    $vazon = $row["vazon"] + 1;
    $sql = "INSERT INTO vevo (vazon, vnev, vcim) VALUES ('$vazon', '$user','$lakcim');";
    $result = $Con->query($sql);
    if($result) {
        header("Location: login.php?reg=OK");
    } else {
        header("Location: login.php?reg=NO");
    }
}

