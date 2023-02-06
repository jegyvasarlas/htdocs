<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width=1.0, initial-scale=1.0">
    <title>PHP Masodfoku egyenlet megoldoprogram</title>
</head>
<body>
    <?php
        $a = 2;
        $b = 2;
        $c = 2;
        $d = $b * $b - 4 * $a * $c;
        $e = sqrt($d);
        $x1 = (-$b + $e) / (2 * $a);
        $x2 = (-$b - $e) / (2 * $a);
        echo($x1."<br>");
        echo($x2);
    ?>
</body>
</html>