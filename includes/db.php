<?php

    $db['db_host'] = '127.0.0.1:3002';
    $db['db_user'] = 'root';
    $db['db_pass'] = '';
    $db['db_name'] = 'swat';

    foreach($db as $key => $value){
        define(strtoupper($key), $value);
    }

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(!$connection){
        die("DATABASE ERROR!");
    }
?>