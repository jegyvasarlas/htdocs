<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szerviz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #ff8000;
            color: #000000;
            zoom: 1.25;
            font-family: Verdana, sans-serif;
        }
        img {
            width: 80%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">Vissza a fooldalra</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='frmv.php'">Vissza az uj vevokre</button>
            <form action="frmvl.php" method="post">
                <p>Szures nev alapjan</p>
                <input type="text" name="nev">
                <input type="submit" value="Szures">
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $con = new mysqli("localhost","root","","szerviz");
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }
                $sql = "select nev, cim from vevo where nev like '%".$_POST["nev"]."%'";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-12 w-75 mt-4' style='color: black; background-color: lightgray'>";
                        echo "<p>".$row["nev"]."</p>";
                        echo "<p>".$row["cim"]."</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='col-12 w-75 mt-4' style='color: black; background-color: lightgray'>";
                    echo "<p>Nincs talalat</p>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>