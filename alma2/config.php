<?php

function Dev() {
    $developement = true;
    return $developement;
}

function Secret() {
    $secret = [
        'mysqlHost'=>'localhost',
        'mysqlUser'=>'root',
        'mysqlPass'=>'',
        'mysqlDB'=>'api'
    ];
    return $secret;
}