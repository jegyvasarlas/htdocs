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
            background-color: #000000;
            color: yellow;
            zoom: 1.25;
            font-family: Verdana, sans-serif;
        }
        img {
            width: 80%;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                <select name="select">
                    <option value="" selected disabled></option>
                    <option value="Januar">Januar</option>
                    <option value="Februar">Februar</option>
                    <option value="Marcius">Marcius</option>
                    <option value="Aprilis">Aprilis</option>
                    <option value="Majus">Majus</option>
                    <option value="Junius">Junius</option>
                    <option value="Julius">Julius</option>
                    <option value="Augusztus">Augusztus</option>
                    <option value="Szeptember">Szeptember</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                    havi reklamaciok:
                <div class="col-12 w-75 mt-4" style="color: black; background-color: lightgray">
                    <!-- Data select goes here -->
                    <p>Teszt adat</p>
                </div>
                <p id="a">label2</p>
                <script>
                    let a = document.getElementById("a");
                    a.innerHTML = new Date().toLocaleDateString('hu-HU', {
                        year: 'numeric',
                        month: 'long',
                        day: '2-digit'
                    });
                </script>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                <img src="img/vevok.png" alt="Vevok" title="Vevok" onclick="makeVisibleOrHide()">
                <p id="b" style="color: black; background-color: white; padding: 5px; display: none" onclick="frmv()" onmouseover="mousePointer()" onmouseleave="mouseDefault()">Uj vevo</p>
                <p id="c" style="color: black; background-color: white; padding: 5px; margin-top: -12px; display: none" onclick="frmvl()" onmouseover="mousePointer()" onmouseleave="mouseDefault()">Osszes vevo</p>
                <img src="img/cikkek.png" alt="Cikkek" title="Cikkek">
                <img src="img/reklamaciok.png" alt="Reklamaciok" title="Reklamaciok">
            </div>
            <script>
                function makeVisibleOrHide() {
                    let b = document.getElementById("b");
                    let c = document.getElementById("c");
                    if(b.style.display === "none") {
                        b.style.display = "block";
                        c.style.display = "block";
                    } else {
                        b.style.display = "none";
                        c.style.display = "none";
                    }
                }
                function frmv() {
                    window.location.href = "frmv.php";
                }
                function frmvl() {
                    window.location.href = "frmvl.php";
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