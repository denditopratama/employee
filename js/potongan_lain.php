<?php 


require('../include/config.php');


												
												$id_select=mysqli_real_escape_string($config,$_REQUEST['id_select']);
												$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
												$id_gaji=mysqli_real_escape_string($config,$_REQUEST['id_gaji']);
												$nilai=mysqli_real_escape_string($config,$_REQUEST['nilai']);
												
												$kos=mysqli_query($config,"INSERT INTO tbl_potongan(id_gaji,id_user,kode_potongan,jumlah) VALUES('$id_gaji','$id_user','$id_select','$nilai')");
												
												
												/* $ages = mysqli_real_escape_string($config,date_diff(date_create($tgl_bakti), date_create('now'))->m);
												if($ages<=0){
													$tehar=0;
												} else {
													$tehar=1000;
												} */
												
											
											?>