<?php
    $host = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'data_toko';

    $mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if($mysqli->connect_errno){
        die('Database Connection Error!');
    }
?>