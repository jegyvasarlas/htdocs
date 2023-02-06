<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    $file_to_read = fopen('nobel.csv', 'r');
 
    if($file_to_read !== FALSE){
         
        echo "<table>\n";
        while(($data = fgetcsv($file_to_read, 1000, ';')) !== FALSE){
            echo "<tr>";
            echo "<td>".$data[0]."</td>";
            echo "<td>".$data[1]."</td>";
            echo "<td>".$data[2]." ".$data[3]."</td>";
            echo "</tr>\n";
        }
        echo "</table>\n";
     
        fclose($file_to_read);
    }
    ?>
</body>
</html>