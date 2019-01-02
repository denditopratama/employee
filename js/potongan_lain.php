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

												$nilai=mysqli_real_escape_string($config,	
												str_replace('.', '', $_POST['nilai']));
												
												$kos=mysqli_query($config,"INSERT INTO tbl_potongan(id_gaji,id_user,kode_potongan,jumlah) VALUES('$id_gaji','$id_user','$id_select','$nilai')");
												
												
												if(!empty($_POST['input'])){
													$input=mysqli_real_escape_string($config,$_POST['input']);
													if($input==12){
														$kosd=mysqli_query($config,"INSERT INTO tbl_potongan(id_gaji,id_user,kode_potongan,jumlah) VALUES('$id_gaji','$id_user','$id_select','$nilai')");
													} 
												
												}
}
											
											?>