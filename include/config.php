<?php
    $host = "localhost";
    $username = "root";
    $password = "euiver7v";
    $database = "dbjmproperti";
    $tm = "tms";
    $config = mysqli_connect($host, $username, $password, $database);
    $configtm = mysqli_connect($host, $username, $password ,$tm);

    if(!$config || !$configtm){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
