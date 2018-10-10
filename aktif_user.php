
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
	$id = mysqli_real_escape_string($config, $_REQUEST['id']);	
	$tak = mysqli_real_escape_string($config, $_REQUEST['tak']);
    
	if($tak=='oila'){
		$querys = mysqli_query($config, "UPDATE tbl_user SET status_aktif=0 WHERE id_user='$id'");
	}	else if($tak=='kuyla'){
		$querys = mysqli_query($config, "UPDATE tbl_user SET status_aktif=1 WHERE id_user='$id'");
	}
	
		
	
			if($querys == true){
				 $_SESSION['succEdit'] = 'SUKSES! Data Berhasil Diubah';
			header("Location: ./admin.php?page=usr");
	die();}
	}
?>