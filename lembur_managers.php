
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
	$id = mysqli_real_escape_string($config, $_REQUEST['id']);	
	$id_presensi = mysqli_real_escape_string($config, $_REQUEST['id_presensi']);
	$tak=mysqli_real_escape_string($config, $_REQUEST['tak']);
    
	if($tak=='OkgJ'){
		$querys = mysqli_query($config, "UPDATE tbl_keterangan_presensi SET status_gm=1 WHERE id='$id'");
	}	else if($tak=='IuJh'){
		$querys = mysqli_query($config, "UPDATE tbl_keterangan_presensi SET status_gm=0 WHERE id='$id'");
	}
	
		
	
			if($querys == true){
				 $_SESSION['succEdit'] = 'SUKSES! Data Berhasil Diubah';
			header("Location: ./admin.php?page=pres&act=ketpres&id=".$id_presensi."");
	die();}
	}
?>