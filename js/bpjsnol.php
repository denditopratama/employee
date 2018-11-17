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


												
												
												$id_user=mysqli_real_escape_string($config,$_POST['id_user']);
												$jenisbpjs=mysqli_real_escape_string($config,$_POST['bpjs']);
												$bpjsnol=mysqli_real_escape_string($config,$_POST['input']);
												if($jenisbpjs=='jampes'){
												$kos=mysqli_query($config,"UPDATE tbl_identitas SET bpjs_jampes_nol='$bpjsnol' WHERE id_user='$id_user'");
												echo'<script>
												alert(\'Data Berhasil Dirubah\');
												</script>';
												$jios=mysqli_query($config,"SELECT bpjs_jampes_nol FROM tbl_identitas WHERE id_user='$id_user'");
														list($kel)=mysqli_fetch_array($jios);
														
												   if($kel==0){
												   echo '<option value="0" selected>Tidak</option>';
												   echo '<option value="1">Ya</option>';
												   }else{
												   echo '<option value="0">Tidak</option>';
												   echo '<option value="1" selected>Ya</option>';}
												   
												} else if ($jenisbpjs=='jamkes') {
													$kos=mysqli_query($config,"UPDATE tbl_identitas SET bpjs_jamkes_nol='$bpjsnol' WHERE id_user='$id_user'");
												echo'<script>
												alert(\'Data Berhasil Dirubah\');
												</script>';
												$jios=mysqli_query($config,"SELECT bpjs_jamkes_nol FROM tbl_identitas WHERE id_user='$id_user'");
														list($kel)=mysqli_fetch_array($jios);
														
												   if($kel==0){
												   echo '<option value="0" selected>Tidak</option>';
												   echo '<option value="1">Ya</option>';
												   }else{
												   echo '<option value="0">Tidak</option>';
												   echo '<option value="1" selected>Ya</option>';}
												}
}
											?>