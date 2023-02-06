<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li, p {
            font-size: 18px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .elso {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <?php echo "<p>I. csoport</p>";?>
    <div class="elso">
        <ul>
            <?php
                $a = 2;
                echo "<li>A " . $a . " m elhosszusagu kocka felszine " . (6*($a*$a)) . " m<sup>2</sup></li>";
                echo "<li>A " . $a . " m sugaru kor terfogata " . (((4*($a*$a*$a))*pi())/3) . " m<sup>3</sup></li>";
                $b = 5;
                echo "<li>Ha a derekszogu haromszog befogoi " . $a . " m es " . $b . " m hosszuak, akkor az atfogo " . sqrt(($a*$a)   +($b*$b)) . " m hosszu</li>";
                $ft = 200;
                $afa = 15;
                echo "<li>A " . $ft . " forintos aru afa tartalma " . $ft/100*$afa . " forint</li>"; 
            ?>
        </ul>
    </div>
</body>
</html>