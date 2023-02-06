<?php
    include("functions.php");
    include('menu.php');

    $login;
    if(isset($_GET["login"])){
        $login = $_GET["login"];
    }
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
    <?php echo $menu; ?>

    <form action="login-validate.php" method="POST">
        Felhasználónév: <input type="text" name="username" /> <br/><br/>
        Jelszó: <input type="password" name="password" /> <br/><br/>
        <input type="submit" value="Bejelentkezés" />
    </form>

    <?php
        if(isset($login)){
            echo "<h2>";
            if( strcmp($login, "OK") == 0 )
                echo "Sikeres a bejelentkezés!";
            else
                echo "Sikertelen a bejelentkezés!";
            echo "</h2>";
        }
    ?>

</body>
</html>