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
												$jmrb=mysqli_real_escape_string($config,$_POST['input']);
												$kos=mysqli_query($config,"UPDATE tbl_user SET jmrb='$jmrb' WHERE id_user='$id_user'");
												echo'<script>
												alert(\'Data Berhasil Dirubah\');
												</script>';
												$jiv=mysqli_query($config,"SELECT jmrb FROM tbl_user WHERE id_user='$id_user'");
														list($jmrb)=mysqli_fetch_array($jiv);
														
														
                                               if($jmrb==0){
												   echo ' <option value="0" selected>JMP</option>';
												   echo ' <option value="1">JMRB</option>';
											   } else {
												   echo ' <option value="0">JMP</option>';
												   echo ' <option value="1" selected>JMRB</option>';
											   }
}
											?>