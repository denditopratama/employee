<?php 
session_start();
if(empty($_SESSION['admin'])){
	echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
	</script>';
} else {
require('../include/config.php');


												
												$id_select=mysqli_real_escape_string($config,$_POST['id_select']);
												$id_user=mysqli_real_escape_string($config,$_POST['id_user']);
												$id_gaji=mysqli_real_escape_string($config,$_POST['id_gaji']);
												$nilai=mysqli_real_escape_string($config,str_replace('.', '', $_POST['nilai']));
												
												
							
												
												
												if($id_select==1){
												$kos=mysqli_query($config,"INSERT INTO tbl_penerimaan(id_gaji,id_user,kode_penerimaan,jumlah) VALUES('$id_gaji','$id_user','$id_select','$nilai')");
												echo $nilai;}
												
												else if($id_select!=1 && empty($_POST['input'])){
												$kos=mysqli_query($config,"INSERT INTO tbl_penerimaan(id_gaji,id_user,kode_penerimaan,jumlah) VALUES('$id_gaji','$id_user','$id_select','$nilai')");}	
													
												
												if(!empty($_POST['input'])){
												$input=mysqli_real_escape_string($config,$_POST['input']);
												if($input=='anjay'){
													$jm=mysqli_query($config,"UPDATE tbl_gaji SET gaji_jm='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
												} else if ($input=='lembirs'){
													$kos=mysqli_query($config,"INSERT INTO tbl_penerimaan(id_gaji,id_user,kode_penerimaan,jumlah) VALUES('$id_gaji','$id_user','$id_select','$nilai')");
												}
											
											}

												
												
												
												
												
}
											?>