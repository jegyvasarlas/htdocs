<?php
include('functions.php');
include('menu.php');
print_r($_POST);
if(sizeof($_POST) > 0){
    $fnev;
    $ftel;
    if(isset($_POST['futarnev'])){
        $fnev = $_POST['futarnev'];
    }
    if (isset($_POST['futartel'])){
        $ftel = $_POST['futartel'];
    }
    $fnev = FilterInputText($fnev);
    $ftel = FilterInputText($ftel);
    $siker = ujFutarFelvetel($fnev,$ftel);
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új futár</title>
</head>
<body>
<?php echo $menu; ?>
    <form action="ujfutar.php" method="post">
        <label for="nev">Futarnev: </label>
        <input type="text" name="futarnev" id="futarnev" required>
        <label for="futartel">Futartel: </label>
        <input type="text" name="futartel" id="futartel" requireds>
        <input type="submit" value="Felvetel">
    </form>
<h2>
<?php
if(isset($siker)){
    if($siker){
        echo "Sikeres felvétel!";
    }
    else{
        echo "Sikertelen felvétel!";
    }
}
?>
</h2>
</body>
</html>
