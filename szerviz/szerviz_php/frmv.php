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
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">Vissza a fooldalra</button>
            <form action="frmv.php" method="post" id="frm">
                Vevokod:<br><input type="text" name="vevokod" readonly><br><br>
                Nev:<br><input type="text" name="nev"><br><br>
                Cim:<br><input type="text" name="cim"><br><br>
            </form>
            <img src="img/kereses.png" alt="Kereses" title="Kereses" onclick="window.location.href = 'frmvl.php'" onmouseover="mousePointer()" onmouseleave="mouseDefault()">
            <img src="img/mentes.png" alt="Mentes" title="Mentes" onmouseover="mousePointer()" onmouseleave="mouseDefault()">
            <img src="img/torles.png" alt="Torles" title="Torles" onmouseover="mousePointer()" onmouseleave="mouseDefault()">
            <img src="img/ures_urlap.png" alt="Ures urlap" title="Ures urlap" onclick="resetForm()" onmouseover="mousePointer()" onmouseleave="mouseDefault()">
        </div>
        <script>
            function resetForm() {
                document.getElementById("frm").reset();
            }
            function mousePointer()
            {
                document.body.style.cursor = "pointer";
            }
            function mouseDefault()
            {
                document.body.style.cursor = "default";
            }
        </script>
    </div>
</div>
</body>
</html>