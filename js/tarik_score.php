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


                                               $departement=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user='".$_SESSION['id_user']."'");
											   while($row=mysqli_fetch_array($departement)){
												   echo $row['score'];
													}		
												
												
												
											?>