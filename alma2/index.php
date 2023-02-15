<?php
use PDO;
require('config.php');
$secret = Secret();
$developement = Dev();

$pdo = new PDO('mysql:host='.$secret['mysqlHost'].';dbname='.$secret['mysqlDB'], $secret['mysqlUser'], $secret['mysqlPass']);

if ($developement) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

$resource = strtok($_SERVER['QUERY_STRING'], '=');

if ($resource == 'products') {
    require 'products.php';
}

echo json_encode($data);
