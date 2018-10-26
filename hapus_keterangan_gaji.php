
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
	$idnya=mysqli_real_escape_String($config,$_REQUEST['idnya']);
	$id=mysqli_real_escape_String($config,$_REQUEST['id']);
	$id_user=mysqli_real_escape_String($config,$_REQUEST['id_user']);
	
    
	$querys = mysqli_query($config, "DELETE FROM tbl_penerimaan WHERE id_user='$id_user' AND(id_gaji='$id' AND id='$idnya')");
	
	
	
			if($querys == true){
				 $_SESSION['succd'] = 'SUKSES! Data Berhasil Dihapus';
			header("Location: ./admin.php?page=pros&id=".$id."");
	die();}}
?>