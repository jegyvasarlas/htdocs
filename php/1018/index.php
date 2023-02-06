<?php
//require_once('tomb.php');
include('tomb.php');
include('atomb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombom hasnalata PHP-ben</title>
    <style>
        hr {
            border: 1px solid red;
        }
        h1 {
            font-family: Comic Sans MS, Verdana, Geneva, Tahoma, sans-serif;
            color: red;
            text-align: center;
        }
        * {
            font-family: Comic Sans MS;
        }
        .paros {
            background-color: lightblue;
        }
        .paratlan {
            background-color: lightpink;
        }
        td, th {
            padding: 2px 5px;
            color: white;
            font-size: 30px;
            text-align: center;
        }
        .center {
            margin: auto;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>❤️ PHP Tombok 😊</h1>
    <?php
        echo("<hr>");
        Test();
        echo("<hr>");
        ATomb();
        echo("<hr>");
        Nested1();
        echo("<hr>");
        Nested2();
        echo("<hr>");
    ?>

    <div class="center">
        <table>
            <?php 
                echo Nested3();
            ?>
        </table>
    </div>
    
    <hr>
    
</body>
</html>