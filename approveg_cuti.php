
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
	$id = mysqli_real_escape_string($config, $_REQUEST['id']);	
    $ids=mysqli_real_escape_string($config,$_REQUEST['ids']);
		if($ids=='QuJguJ'){
		$querys = mysqli_query($config, "UPDATE tbl_cuti SET status_gm=1 WHERE id='$id'");}
		else if($ids=='MjgnNg'){
		$querys = mysqli_query($config, "UPDATE tbl_cuti SET status_gm=0 WHERE id='$id'");
		}
	
			if($querys == true){
				 $_SESSION['succEdit'] = 'SUKSES! Data Berhasil Diubah';
			header("Location: ./admin.php?page=cuti");
	die();}}
?>