
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
	$id = mysqli_real_escape_string($config, $_REQUEST['id']);	
	$id_presensi = mysqli_real_escape_string($config, $_REQUEST['id_presensi']);	
    
		$querys = mysqli_query($config, "DELETE FROM tbl_lembur WHERE id='$id'");
		
	
			if($querys == true){
				 $_SESSION['succEdit'] = 'SUKSES! Data Berhasil Diubah';
			header("Location: ./admin.php?page=lmbr&id=".$id_presensi."");
	die();}}
?>