<?php
include 'kerdessorok/feladatok.php';
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
        div.row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        div.half {
            width: 50%;
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
    else if (this.value == 2) {
        document.getElementById('kerdessor').innerHTML = '<?php echo MasodikKerdesek(); ?>';
    }
    else if (this.value == 3) {
        document.getElementById('kerdessor').innerHTML = '<?php echo HarmadikKerdesek(); ?>';
    }
    else if (this.value == 4) {
        document.getElementById('kerdessor').innerHTML = '<?php echo NegyedikKerdesek(); ?>';
    }
    else if (this.value == 5) {
        document.getElementById('kerdessor').innerHTML = '<?php echo OtodikKerdesek(); ?>';
    }
    else if (this.value == 6) {
        document.getElementById('kerdessor').innerHTML = '<?php echo HatodikKerdesek(); ?>';
    }
    else if (this.value == 7) {
        document.getElementById('kerdessor').innerHTML = '<?php echo HetedikKerdesek(); ?>';
    }
    else if (this.value == 8) {
        document.getElementById('kerdessor').innerHTML = '<?php echo NyolcadikKerdesek(); ?>';
    }
    else if (this.value == 9) {
        document.getElementById('kerdessor').innerHTML = '<?php echo KilencedikKerdesek(); ?>';
    }
    else if (this.value == 10) {
        document.getElementById('kerdessor').innerHTML = '<?php echo TizedikKerdesek(); ?>';
    }
    else if (this.value == 11) {
        document.getElementById('kerdessor').innerHTML = '<?php echo TizenegyedikKerdesek(); ?>';
    }
    else if (this.value == 12) {
        document.getElementById('kerdessor').innerHTML = '<?php echo TizenkettedikKerdesek(); ?>';
    }
}
</script>
</body>
</html>