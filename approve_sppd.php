
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
		
            
  $id = mysqli_real_escape_string($config, $_REQUEST['id']);
  if($_SESSION['admin']==1){
  $querysd = mysqli_query($config, "UPDATE tbl_sppd SET status_manager=1,status_gm=1,status_direktur=1,status_umum=1 WHERE id='$id'");}
  else if($_SESSION['admin']==2){
  $querysd = mysqli_query($config, "UPDATE tbl_sppd SET status_manager=1,status_gm=1,status_direktur=1 WHERE id='$id'");}
  else if($_SESSION['admin']==3){
  $querysd = mysqli_query($config, "UPDATE tbl_sppd SET status_manager=1,status_gm=1,status_direktur=1 WHERE id='$id'");}
  else if($_SESSION['admin']==4){
  $querysd = mysqli_query($config, "UPDATE tbl_sppd SET status_manager=1,status_gm=1 WHERE id='$id'");}
  else if($_SESSION['admin']==5){
  $querysd = mysqli_query($config, "UPDATE tbl_sppd SET status_manager=1 WHERE id='$id'");}



			if($querysd == true){
				 $_SESSION['succapp'] = 'SUKSES! SPPD Berhasil Di Approve';
			header("Location: ./admin.php?page=sppd");
	die();}
	
	
	
	}
?>