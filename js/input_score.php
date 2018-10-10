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


												
												if(isset($_REQUEST['data'])){
												$data=mysqli_real_escape_string($config,$_REQUEST['data']);
												$updatehigh=mysqli_query($config,"UPDATE tbl_user SET score='$data' WHERE id_user='".$_SESSION['id_user']."'");}
												
											?>