<?php
include 'functions.php';
session_unset(); // Kiüríti a munkamenetet
session_destroy(); // Eldobja a munkamenetet
setcookie('oldalak', '', time()-1); // Eldobja a cookie-t
include 'menu.php';
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
    <h2>Kijelentkezés sikeres!</h2>
</body>
</html>

