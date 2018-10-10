<?php 


$host = "localhost";
    $username = "root";
    $password = "";
    $database = "dbjmproperti";
    $config = mysqli_connect($host, $username, $password, $database);

    if(!$config){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }



												$kode_unit=mysqli_real_escape_string($config,$_REQUEST['kode_unit']);
                                               $departement=mysqli_query($config,"SELECT * FROM tbl_sub_unit WHERE kode_unit='$kode_unit'");
											   while($row=mysqli_fetch_array($departement)){
												   echo '<option value="'.$row['id'].'">'.$row['sub_unit'].'</option>';
											 
													}		
											?>