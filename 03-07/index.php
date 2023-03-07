<?php
include 'kerdessorok/elso.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adatbáziskezelés teszt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            zoom: 1.25;
        }
    </style>
</head>
<body>
<h1>Adatbáziskezelés teszt</h1>

<form action="db_teszt_valaszok.php" method="post">
    <label for="test_sorszam">Válasszon egy feladatsort:</label>
    <select name="test_sorszam" id="test_sorszam">
        <option value="" selected disabled>Válasszon...</option>
        <?php
        for ($i=1; $i<=12; $i++) {
            echo "<option value='$i'>$i. feladatsor</option>";
        }
        ?>
    </select>
    <br><br>
    <div id="kerdessor">

    </div>
    <input type="submit" value="Küldés">
</form>

<script>
document.getElementById('test_sorszam').onchange = function() {
    if (this.value == '') {
        document.getElementById('kerdessor').innerHTML = '';
        return;
    }
    else if (this.value == 1) {
        document.getElementById('kerdessor').innerHTML = '<?php echo ElsoKerdesek(); ?>';
    }
    else document.getElementById('kerdessor').innerHTML = this.value;
}
</script>
</body>
</html>