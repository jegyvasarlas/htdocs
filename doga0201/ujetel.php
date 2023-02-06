<?php
function ConnectDB()
{
    $con = new mysqli('localhost','root','','hamburger');
    if ($con->connect_error) {
        die('Could not connect: ' . $con->connect_error);
    }
    return $con;
}
function FilterInputText($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
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
<h1>Uj tetel felvetele 🍔ヾ(≧▽≦*)</h1>
<div class="center">
    <a href="index.php">Vissza az elozo oldalra</a>
</div>
<br>
<div class="form">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="nev">Nev:</label>
    <br>
    <input type="text" id="nev" name="nev" required>
    <br>
    <br>
    <label for="ar">Ar:</label>
    <br>
    <input type="number" id="ar" name="ar" required>
    <br>
    <br>
    <input type="submit" value="Felvetel">
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $con = ConnectDB();
        $nevPlain = FilterInputText($_POST["nev"]);
        $arPlain = FilterInputText($_POST["ar"]);
        $nev = mysqli_real_escape_string($con, $nevPlain);
        $ar = mysqli_real_escape_string($con, $arPlain);
        //LettersOnly
        $nevRegex = "/^[a-zA-Z ]*$/";
        $arRegex = "/^[0-9]*$/";
        if(preg_match($nevRegex, $nev) && preg_match($arRegex, $ar)){
            $sql = "INSERT INTO menu (nev, ar) VALUES ('$nev', '$ar')";
            if ($con->query($sql) === TRUE) {
                echo "<p class='green'>Sikeres felvetel</p>";
            } else {
                echo "<p class='red'>" . $sql . "<br>" . $con->error . "</p>";
            }
        } else{
            echo "<p class='red'>Hibas adatok</p>";
        }
    }
    ?>
</div>
</body>
</html>