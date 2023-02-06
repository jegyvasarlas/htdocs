<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="head">
                <h1>PHP weboldal</h1>
            </div>
            <div class="pre">
                <h2>Elokeszuletek:</h2>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $mysql_database = 'nyelviskola';

                $conn = new mysqli($servername, $username, $password);
                if ($conn->connect_error) {
                    die("A csatlakozas nem sikerult: " . $conn->connect_error);
                }

                $sql = "DROP DATABASE IF EXISTS nyelviskola";
                if ($conn->query($sql) === TRUE) {
                    echo "Elozo adatbazis sikeresen eldobva<br>";
                } else {
                    echo "Hiba tortent az elozo adatbazis eldobasa soran: " . $conn->error;
                    echo "<br>";
                }

                $sql = "CREATE DATABASE nyelviskola DEFAULT CHARACTER set utf8 COLLATE utf8_hungarian_ci;";
                if ($conn->query($sql) === TRUE) {
                    echo "Adatbazis sikeresen letrehozva <br>";
                } else {
                    echo "Hiba tortent az adatbazis letrehozasa soran: " . $conn->error;
                    echo "<br>";
                }

                $conn->query("use nyelviskola");

                $templine = '';
                $lines = file("tablak.sql");
                foreach ($lines as $line) {
                    if (substr($line, 0, 2) == '--' || $line == '')
                        continue;
                    $templine .= $line;
                    if (substr(trim($line), -1, 1) == ';') {
                        $conn->query($templine);
                        $templine = '';
                    }
                }
                echo "Tablak sikeresen beimportalva <br>";

                $templine = '';
                $lines = file("adatok.sql");
                foreach ($lines as $line) {
                    if (substr($line, 0, 2) == '--' || $line == '')
                        continue;
                    $templine .= $line;
                    if (substr(trim($line), -1, 1) == ';') {
                        $conn->query($templine);
                        $templine = '';
                    }
                }
                echo "Adatok sikeresen beimportalva <br>";

                $conn->close();
                ?>
            </div>
            <br>
            <div class="main">
                <div class="mid">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="submit" name="harom" value="3. feladat">
                        <input type="submit" name="negy" value="4. feladat">
                        <input type="submit" name="ot" value="5. feladat">
                        <input type="submit" name="reset" value="Visszaallitas">
                        <!-- type="reset"-tel nem tunteti el a tablazatot, ezert van reset helyett submit-->
                    </form>
                </div>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $mysql_database = 'nyelviskola';

                    $conn = new mysqli($servername, $username, $password);
                    if ($conn->connect_error) {
                        die("A csatlakozas nem sikerult: " . $conn->connect_error);
                    }

                    $conn->query("use nyelviskola");

                    if (isset($_POST['harom'])) {
                        $sql1 = "ALTER TABLE vizsgak ADD CONSTRAINT FK_1 FOREIGN KEY (nyelvid) REFERENCES nyelvek(id);";
                        $sql2 = "ALTER TABLE jelentkezesek ADD CONSTRAINT FK_2 FOREIGN KEY (vizsga) REFERENCES vizsgak(sorsz);";
                        if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
                            echo "<br><table><tr><th>3. feladat</th><th>4.feladat</th><th>5. feladat</th></tr><tr><td>$sql1</td><td></td><td></td></tr><tr><td>$sql2</td><td></td><td></td></tr></table>";
                        } else {
                            echo "Hiba tortent: " . $conn->error;
                            echo "<br>";
                        }
                    }

                    if (isset($_POST['negy'])) {
                        $sql = "UPDATE `jelentkezesek` SET `mobil`='30784613' WHERE `sorsz` = 9;";
                        if ($conn->query($sql) === TRUE) {
                            echo "<br><table><tr><th>3. feladat</th><th>4.feladat</th><th>5. feladat</th></tr><tr><td></td><td>$sql</td><td></td></tr><tr><td>&#8203;</td><td>&#8203;</td><td>&#8203;</td></tr></table>";
                        } else {
                            echo "Hiba tortent: " . $conn->error;
                            echo "<br>";
                        }
                    }

                    if (isset($_POST['ot'])) {
                        $sql = "UPDATE `jelentkezesek` SET `mobil`='30784613' WHERE `sorsz` = 9;";
                        if ($conn->query($sql) === TRUE) {
                            echo "<br><table><tr><th>3. feladat</th><th>4.feladat</th><th>5. feladat</th></tr><tr><td></td><td></td><td>$sql</td></tr><tr><td>&#8203;</td><td>&#8203;</td><td>&#8203;</td></tr></table>";
                        } else {
                            echo "Hiba tortent: " . $conn->error;
                            echo "<br>";
                        }
                    }

                    $conn->close();
                ?>
            </div>
        </div>
    </body>
</html>