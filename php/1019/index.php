<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Nyeremenyjatek!</h1>
    <!-- GET -->
    <h2><a href="nyeremeny.php?kedvezmeny=10">10% kedvezmeny!</a></h2>
    <h2><a href="nyeremeny.php?ajandek=pendrive">Ajandek pendrive!</a></h2>
    <h2><a href="nyeremeny.php?ajandek=latvanyterv&ajandek2=nyomtatas">Ingyenes latvanytervezes!</a></h2>
    <!-- GET 2 -->
    <form action="nyeremeny.php" method="GET">
        Nev: <input type="text" name="nev"><br><br>
        Email: <input type="text" name="email"><br><br>
        <input type="submit" value="Feliratkozom">
    </form>
    <!-- POST -->
    <h2>Iratkozz fel a hirlevelre!</h2>
    <form action="nyeremeny.php" method="POST">
        Nev: <input type="text" name="nev"><br><br>
        Email: <input type="text" name="email"><br><br>
        <input type="submit" value="Feliratkozom">
    </form>
    <br>
    <table>
        <?php
            $k = 0;
            for ($i = 1; $i<11; $i++)
            {
                echo "<tr>";
                for($j=0; $j<=5; $j++)
                {
                    echo "<td>";
                    echo $k;
                    $k++;
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>