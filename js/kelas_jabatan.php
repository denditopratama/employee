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
												$kelas_jabatan=mysqli_real_escape_string($config,$_POST['input']);
												$kos=mysqli_query($config,"UPDATE tbl_user SET kelas_jabatan='$kelas_jabatan' WHERE id_user='$id_user'");
												echo'<script>
												alert(\'Data Berhasil Dirubah\');
												</script>';
												$jios=mysqli_query($config,"SELECT kelas_jabatan FROM tbl_user WHERE id_user='$id_user'");
														list($kel)=mysqli_fetch_array($jios);
														
														
                                               $kelaz=mysqli_query($config,"SELECT * FROM tbl_kelas_jabatan ORDER BY kelas_jabatan");
											   while($row=mysqli_fetch_array($kelaz)){
												   if($row['kelas_jabatan']==$kel){
												   echo '<option value="'.$row['kelas_jabatan'].'" selected>'.$row['kelas_jabatan'].' - '.$row['uraian_jabatan'].'</option>';
												   }else{
												   echo '<option value="'.$row['kelas_jabatan'].'">'.$row['kelas_jabatan'].' - '.$row['uraian_jabatan'].'</option>';}
											   }
}
											?>