<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon/think.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Szalloda</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }
        #wrapper { display: flex; }
        .button {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="col-md-6 col-lg-4 col-xl-3">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="w3-container w3-card-4">
                Nev: 
                <input type="text" class="w3-input w3-border" name="name"><br>
                E-mail: 
                <input type="text" class="w3-input w3-border" name="email"><br>
                Lakcim: 
                <input type="text" class="w3-input w3-border" name="address"><br>
                Telefon: 
                <input type="text" class="w3-input w3-border" name="phone"><br>
                Megjegyzes: 
                <input type="textarea" class="w3-input w3-border" name="script"></textarea><br>
                Mettol: 
                <input type="date" class="w3-input w3-border" name="from"><br>
                Meddig: 
                <input type="date" class="w3-input w3-border" name="to"><br>
                Auto:  
                <input type="checkbox" class="" name="car"><br><br>

                <input type="submit" class="w3-btn w3-blue button" name="submit"><br><br>
            </form>
        </div>
        <div class="col-md-6 col-lg-8 col-xl-9" style="padding-left:15px;">
            <?php
            if ($_POST["submit"])
            {
                echo $_POST["name"]. "<br>";
                echo $_POST["email"]. "<br>";
                echo $_POST["phone"]. "<br>";
                echo $_POST["script"]. "<br>";
                echo $_POST["from"]. "<br>";
                echo $_POST["to"]. "<br>";
                echo isset($_POST["car"]). "<br>";
            }
            ?>
        </div>
    </div>
</body>
</html>