<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            width: 25px;
            height: 25px;
            text-align: center;
            /*background-color: rgb(200, 200, 255);*/
        }
        .egyikszin {
            background-color: rgb(200, 200, 255);
        }
        .masikszin {
            background-color: rgb(255, 200, 200);
        }
    </style>
</head>
<body>
    <h1>Elso PHP webalkalmazasom</h1>
    <!-- Itt a titkos jelszavam: alma123-->
    <?php
        echo "alma";
        // masik titkom nincs
        echo "<h2>Alcim</h2>";
        echo "<h2>" . 3+2 . "</h2>";
        $szam = 2;
        echo $szam . "<br><br>";
        $szam = "szoveg";
        echo $szam . " -> ";
        var_dump($szam);
        
        echo "<hr>";
        $a = "3";
        $b = 5;
        echo $a+$b . " ";
        echo $a.$b . "<br>";
        
        echo "<hr>";
        $a = "5";
        $b = 5;
        var_dump($a == $b);
        echo "<br>";
        var_dump($a === $b); 

        echo "<hr>";
        $szam = "12";
        var_dump($szam);
        echo "<br>";
        $szam *= 1;
        var_dump($szam);
        
        echo "<hr>";
        $szam = 5;
        var_dump($szam);
        echo "<br>";
        $szam .= "";
        var_dump($szam);

        echo "<hr>";
        for($i=1; $i<=6; $i++)
            echo "<h".$i.">" . $i . ". rendu cimsor " . "</h".$i.">";
    ?>
    <h2>Szorzotabla</h2>
    <table>
        <?php 
            $egyik = true;
            for($i=1; $i<=10; $i++){
                echo "<tr>";
                for($j=1; $j<=10; $j++){
                    echo "<td class='masikszin'>";
                        echo $i*$j;
                    echo "</td>";
                }
            }
        ?>
    </table>
</body>
</html>