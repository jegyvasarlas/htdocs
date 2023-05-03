<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Múzeum</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light my-nav fixed-top" >
    <div class="container-fluid">
        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="true">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Nyitólap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="list.php">Kiállítások</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="delete.php">Törlés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="insert.php">Új kiállítás felvétele</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid" style="margin-top: 59px">
    <div class="row">
        <?php
            include "main.php";
            $con = ConnectDB();
            $sql = "SELECT * FROM kiallitasok";
            $result = $con->query($sql);
            $output = "";
            $output .= "<table class='table table-bordered table-hover'";
            $output .= "<tr>";
            $output .= "<th>Név</th>";
            $output .= "<th>Leírás</th>";
            $output .= "<th>Kezdete</th>";
            $output .= "<th>Vége</th>";
            $output .= "<th>Tárlatvezető</th>";
            $output .= "</tr>";
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $output .= "<tr>";
                    $output .= "<td>" . $row["nev"] . "</td>";
                    $output .= "<td>" . $row["leiras"] . "</td>";
                    $output .= "<td>" . $row["kezdete"] . "</td>";
                    $output .= "<td>" . $row["vege"] . "</td>";
                    $output .= "<td>" . $row["tarlatvezeto"] . "</td>";
                    $output .= "</tr>";
                }
            }
            $output .= "</table>";
            $con->close();
            echo $output;
        ?>
    </div>
</div>
</body>
</html>