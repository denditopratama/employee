<?php 
session_start();

	$host = "localhost";
    $username = "root";
    $password = "";
    $database = "dbjmproperti";
    $config = mysqli_connect($host, $username, $password, $database);

    if(!$config){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

												$time=mysqli_real_escape_string($config,$_REQUEST['waktu']);
                                               $waktay=mysqli_query($config,"UPDATE tbl_user SET waktugame='$time' WHERE id_user='".$_SESSION['id_user']."'");
											  
												
												
												
											?>