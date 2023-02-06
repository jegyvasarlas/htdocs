<?php
    include("functions.php");
    include('menu.php');
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP és MySQL összekapcsolása</title>
</head>
<body>
    <?php echo $menu; ?>

    <h1>Eddig rendelések</h1>
    <table>
        <thead>
            <tr>
                <th>Vevő név</th>
                <th>Vásárlás időpontja</th>
                <th>Pizza</th>
                <th>Pizza ára (/db)</th>
                <th>Mennyiség (db)</th>
                <th>Összeg</th>
            </tr>
        </thead>
        <tbody>
            <?php echo Rendelesek(); ?>
        </tbody>
    </table>
</body>
</html>