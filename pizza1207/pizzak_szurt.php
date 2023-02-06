<?php
    include("functions.php");
    include('menu.php');

    $minAr = 0;
    $maxAr = 99999;
    if( isset($_REQUEST['minAr']) )
        $minAr = $_REQUEST['minAr'];

    if( isset($_REQUEST['maxAr']) )
        $maxAr = $_REQUEST['maxAr'];

    $rendez = 'ASC';
    if( isset($_GET['nev']))
        $rendez = $_GET['nev'];
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

    <h1> Pizzáink <?php echo $minAr . "Ft-tól " . $maxAr . "Ft-ig "; ?> </h1>

    <table>
        <thead>
            <tr>
                <th>
                    <a href="pizzak_szurt.php?minAr=<?php echo $minAr; ?>&maxAr=<?php echo$maxAr; ?>&nev=<?php echo (strcmp($rendez, 'ASC') == 0)?'DESC':'ASC'; ?>" >
                        Pizza neve </a>
                </th>
                <th>Pizza ára</th>
            </tr>
        </thead>

        <tbody>
            <?php echo PizzaSzuresArSzerint($minAr, $maxAr, $rendez);  ?>
        </tbody>
    </table>
    
      
</body>
</html>